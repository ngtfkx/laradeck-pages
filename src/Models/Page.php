<?php

namespace Ngtfkx\Laradeck\Pages\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Ngtfkx\Laradeck\Pages\Models\Page
 *
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $header Заголовок страницы
 * @property string $content Текст страницы
 * @property string $slug Слаг страницы
 * @method static \Illuminate\Database\Query\Builder|Page bySlug($slug)
 */
class Page extends Model
{
    protected $fillable = [
        'header', 'content', 'slug',
    ];

    /**
     * Выбрать по слагу
     *
     * @param Builder $query
     * @param string $slug
     * @return Builder
     */
    public function scopeBySlug(Builder $query, string $slug): Builder
    {
        return $query->where('slug', '=', $slug);
    }
}
