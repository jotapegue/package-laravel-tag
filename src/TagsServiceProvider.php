<?php

namespace Jotapegue\Tags;

use Illuminate\Support\ServiceProvider;

class TagsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'tags');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations/');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/jotapegue/tags'),
            __DIR__.'/database/migrations' => base_path('database/migrations/'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/routes.php';
        $this->app->make('Jotapegue\Tags\Controllers\TagsController');
    }
}
