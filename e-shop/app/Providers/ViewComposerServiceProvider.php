<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Tag;
use App\Models\ProductCategory;

class ViewComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('*', function ($view) {
            $tags = Tag::all();
            $categories_name = ProductCategory::all();
            $view->with(compact('tags', 'categories_name'));
        });
    }

    public function register()
    {
        //
    }
}
