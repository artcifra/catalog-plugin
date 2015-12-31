<?php namespace Kodji\Catalog;

use Backend;
use System\Classes\PluginBase;

/**
 * catalog Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'kodji.catalog::lang.plugin.name',
            'description' => 'kodji.catalog::lang.plugin.description',
            'author'      => 'kodji',
            'icon'        => 'icon-shopping-cart',
            'homepage'    => 'https://github.com/kodji/catalog-plugin'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Kodji\Catalog\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'kodji.catalog.access_products' => [
                'tab' => 'catalog',
                'label' => 'kodji.catalog::lang.permissions.access_products'
            ],
            'kodji.catalog.access_categories' => [
                'tab' => 'catalog',
                'label' => 'kodji.catalog::lang.permissions.access_categories'
            ],
            'kodji.catalog.access_import' => [
                'tab' => 'catalog',
                'label' => 'kodji.catalog::lang.permissions.access_import'
            ]
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'catalog' => [
                'label'       => 'kodji.catalog::lang.catalog.menu_label',
                'url'         => Backend::url('kodji/catalog/products'),
                'icon'        => 'icon-shopping-cart',
                'permissions' => ['kodji.catalog.*'],
                'order'       => 500,

                'sideMenu' => [
                    'products' => [
                        'label'       => 'kodji.catalog::lang.products.side_menu',
                        'icon'        => 'icon-list-ul',
                        'url'         => Backend::url('kodji/catalog/products'),
                        'permissions' => ['kodji.catalog.access_products']
                    ],
                    'categories' => [
                        'label'       => 'kodji.catalog::lang.categories.side_menu',
                        'icon'        => 'icon-list-ul',
                        'url'         => Backend::url('kodji/catalog/categories'),
                        'permissions' => ['kodji.catalog.access_categories']
                    ],
                    'import' => [
                        'label'       => 'kodji.catalog::lang.import.side_menu',
                        'icon'        => 'icon-file-excel-o',
                        'url'         => Backend::url('kodji/catalog/import'),
                        'permissions' => ['kodji.catalog.access_import']
                    ]
                ]
            ]
        ];
    }

}