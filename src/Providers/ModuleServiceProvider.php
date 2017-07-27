<?php

namespace Sahakavatar\Framework\Providers;

use Sahakavatar\Framework\Models\Optimzation;
use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/../'.DS.'FwFunctions'.DS.'functions.php';
        BBaddShortcode('FW-get-classes', 'FWgetClasses');
        BBaddShortcode('FW-get', 'FWget');

        $this->loadTranslationsFrom(__DIR__ . '/../Resources/Lang', 'framework');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'framework');
//        Optimzation::generateContainerClasses();
//        Optimzation::generateHeaderClasses();
        $tubs = [
            'framework' => [
                [
                    'title' => 'Main classes',
                    'url' => '/admin/framework/main-css/main',
                    'icon' => 'fa fa-code'
                ],[
                    'title' => 'Custom classes',
                    'url' => '/admin/framework/custom-classes',
                    'icon' => 'fa fa-code'

                ]
            ], 'framework_plugins' => [
//                [
//                    'title' => 'Frame work',
//                    'url' => '/admin/framework/plugins/framework',
//                ],
//                [
//                    'title' => 'Classes',
//                    'url' => '/admin/framework/plugins/classes',
//                    'icon' => 'fa fa-cube'
//
//                ],[
//                    'title' => 'Collections',
//                    'url' => '/admin/framework/plugins/collections',
//                    'icon' => 'fa fa-cube'
//                ],
                [
                    'title' => 'Add-on',
                    'url' => '/admin/framework/plugins/add-on',
                ],
                [
                    'title' => 'components',
                    'url' => '/admin/framework/plugins/components',
                ],
                [
                    'title' => 'Assets',
                    'url' => '/admin/framework/plugins/assets',
                ],
                [
                    'title' => 'Icons',
                    'url' => '/admin/framework/plugins/icons',
                ],
                [
                    'title' => 'Upload',
                    'url' => '#',
                    'item_class' => 'tabdownloadbtn',
                    'icon' => 'fa fa-upload'

                ],
            ] ,'fw_assets' => [
                [
                    'title' => 'fonts & icons',
                    'url' => '/admin/framework/assets',
                    'icon' => 'fa fa-book'

                ],[
                    'title' => 'JS',
                    'url' => '/admin/framework/js',
                    'icon' => 'fa fa-code'
                ]
            ],
            'essential' => [
                [
                    'title' => 'Default styles',
                    'url' => '/admin/framework/essential',
                    'icon' => 'fa fa-book'

                ],[
                    'title' => 'General classes',
                    'url' => '/admin/framework/essential/general-classes',
                    'icon' => 'fa fa-code'
                ],[
                    'title' => 'Grid classes',
                    'url' => '/admin/framework/essential/grid-classes',
                    'icon' => 'fa fa-code'
                ]
            ],
            'FwColections' => [
                [
                    'title' => 'Page collections',
                    'url' => '/admin/framework/fw-collections/page-collections',
                    'icon' => 'fa fa-code'
                ],[
                    'title' => 'Component collections',
                    'url' => '/admin/framework/fw-collections/component-collections',
                    'icon' => 'fa fa-code'
                ]
            ],
            'components' => [
                [
                    'title' => 'Simple components',
                    'url' => '/admin/framework/component',
                    'icon' => 'fa fa-book'

                ],[
                    'title' => 'Js components',
                    'url' => '/admin/framework/component/js-components',
                    'icon' => 'fa fa-code'
                ],[
                    'title' => 'Full page',
                    'url' => '/admin/framework/component/full-page',
                    'icon' => 'fa fa-code'
                ],[
                    'title' => 'Component collections',
                    'url' => '/admin/framework/fw-collections/component-collections',
                    'icon' => 'fa fa-code'
                ]
            ],'fw_settings' => [
                [
                    'title' => 'Settings',
                    'url' => '/admin/framework/settings',
                    'icon' => 'fa fa-book'

                ],[
                    'title' => 'Short Codes',
                    'url' => '/admin/framework/settings/short-codes',
                    'icon' => 'fa fa-rando'

                ],[
                    'title' => 'Save',
                    'url' => '#',
                    'item_class' => 'tabdownloadbtn form-submit',
                    'icon' => 'fa fa-save'

                ]
            ],
            'collection' => [
                [
                    'title' => 'Master Collections',
                    'url' => '/admin/framework/main-css/master-collection',
                    'icon' => 'fa fa-cube'
                ],[
                    'title' => 'Framework Collections',
                    'url' => '/admin/framework/main-css/element-collection',
                    'icon' => 'fa fa-cube'
                ]
            ],
            'versions_settings' => [
                [
                    'title' => 'Settings',
                    'url' => '/admin/framework-versions/settings',
                    'icon' => 'fa fa-cog'
                ]
            ],
            'collections' => [
                [
                    'title' => 'Framework Collections',
                    'url' => '/admin/framework/elements-collection/framework',
                    'icon' => 'fa fa-cube'

                ],
                [
                    'title' => 'Custom Collections',
                    'url' => '/admin/framework/elements-collection/custom',
                    'icon' => 'fa fa-cube'

                ]
            ]
        ];

        \Eventy::action('my.tab', $tubs);

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
