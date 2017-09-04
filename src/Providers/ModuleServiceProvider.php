<?php

namespace Sahakavatar\Framework\Providers;

use Illuminate\Support\ServiceProvider;
use Sahakavatar\Framework\Models\Optimzation;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/../' . DS . 'FwFunctions' . DS . 'functions.php';
        BBaddShortcode('FW-get-classes', 'FWgetClasses');
        BBaddShortcode('FW-get', 'FWget');

        $this->loadTranslationsFrom(__DIR__ . '/../Resources/Lang', 'framework');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'framework');

        $tabs = [
            'framework_settings' => [
                [
                    'title' => 'Backend',
                    'url' => '/admin/framework/settings',
                ],
                [
                    'title' => 'Frontend',
                    'url' => '/admin/framework/settings/frontend',
                ]
            ],
            'framework_assets' => [
                [
                    'title' => 'Main Js',
                    'url' => '/admin/framework/main-js',
                ],
                [
                    'title' => 'Assets',
                    'url' => '/admin/framework/assets',
                ]
            ]
        ];

        \Eventy::action('my.tab', $tabs);

        //TODO; remove when finish all
        \Sahakavatar\Cms\Models\Routes::registerPages('sahak.avatar/framework');
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
