<?php

namespace Ngtfkx\Laradeck\Pages\Controllers;

use App\Http\Controllers\Controller;
use Ngtfkx\Laradeck\Pages\PageService;

class PageController extends Controller
{
    /**
     * Любая текстовая страница
     *
     * @param int|string $page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($page)
    {
        $page = (new PageService($page))->get();

        return view('laradeck-pages::show', compact('page'));
    }
}
