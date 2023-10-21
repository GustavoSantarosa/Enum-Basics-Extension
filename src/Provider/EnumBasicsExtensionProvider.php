<?php

namespace GustavoSantarosa\EnumBasicsExtension\Provider;

use Illuminate\Support\ServiceProvider;

class EnumBasicsExtensionProvider extends ServiceProvider
{
    public $bindings = [
        ServerProvider::class => EnumBasicsExtension::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
