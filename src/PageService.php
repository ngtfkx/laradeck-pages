<?php

namespace Ngtfkx\Laradeck\Pages;

use Ngtfkx\Laradeck\Pages\Exceptions\PageNotFoundException;
use Ngtfkx\Laradeck\Pages\Models\Page;

class PageService
{
    /**
     * @var Page
     */
    protected $page;

    /**
     * @param Page|int|string|null $page Модель, ID или slug
     */
    public function __construct($page = null)
    {
        if (!empty($page)) {
            $this->set($page);
        } else {
            $this->page = new Page;
        }
    }

    /**
     * @param $page Page|int|string Модель, ID или slug
     * @return PageService
     * @throws PageNotFoundException
     */
    public function set($page): PageService
    {
        if ($page instanceof Page) {
            $this->page = $page;
        } else {
            $object = (is_numeric($page) && $page == (int)$page)
                ? Page::find($page)
                : $this->getBySlug($page);

            if (empty($object)) {
                $message = sprintf('Страница не найдена (%s)', $page);
                throw new PageNotFoundException($message);
            }

            $this->page = $object;
        }
        return $this;
    }

    /**
     * @return Page
     */
    public function get(): Page
    {
        return $this->page;
    }

    /**
     * Получить страницу по его слагу
     *
     * @param string $slug
     * @return Page
     */
    public function getBySlug(string $slug)
    {
        $page = Page::bySlug($slug)->first();

        return $page;
    }

    /**
     * Получить страницу доступную для отображения по его слагу
     *
     * @param string $slug
     * @return Page
     */
    public function getVisibleBySlug(string $slug)
    {
        $page = Page::bySlug($slug)->active()->first();

        return $page;
    }
}