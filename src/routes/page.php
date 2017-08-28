<?php

Route::get('/pages/{page}', '\Ngtfkx\Laradeck\Pages\Controllers\PageController@show')
    ->name('page.show');