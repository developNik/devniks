<?php

namespace Devniks\BlogCurd;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider {

    public function register() {
        $this->app->singleton(Blog::class, function ($app) {
            return new Blog();
        });
    }

    public function boot() {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
