<?php

namespace Khatabwedaa\BladeCssIcons;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

final class BladeCssIconsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory) {
            $factory->add('css-icons', [
                'path' => __DIR__ . '/../resources/svg',
                'prefix' => 'css',
            ]);
        });

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg' => public_path('vendor/blade-css-icons'),
            ], 'blade-css-icons');
        }
    }
}
