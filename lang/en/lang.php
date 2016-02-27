<?php

return [
    'plugin' => [
        'name' => 'Catalog',
        'description' => 'Simple catalog plugin with shopping cart.'
    ],
    'catalog' => [
        'menu_label' => 'Catalog',
        'menu_description' => 'Manage Catalog',
        'categories' => 'Categories',
        'create_category' => 'Create category',
    ],
    'categories' => [
        'side_menu' => 'Categories',
        'new_category' => 'New category',
        'uncategorized' => 'Uncategorized'
    ],
    'category' => [
        'name' => 'Category name',
        'description' => 'Description',
        'uncategorized' => 'No category',
        'image' => 'Image'
    ],
    'products' => [
        'side_menu' => 'Products',
        'list_title' => 'Manage products',
        'new_product' => 'New product',
        'edit' => 'Edit product',
        'delete' => 'Delete product'
    ],
    'product' => [
        'title' => 'Product',
        'id' => 'System ID',
        'partID' => 'Partial ID',
        'name' => 'Name',
        'description' => 'Description',
        'price' => 'Price',
        'base_tab' => 'Properties',
        'additional_tab' => 'Additional',
        'image' => 'Image',
        'image_tab' => 'Image'
    ],
    'import' => [
        'side_menu'=> 'Import',
        'title' => 'Import data from file'
    ],
    'permissions' => [
        'access_products' => 'Access products list',
        'access_categories' => 'Access categories list',
        'access_import' => 'Access import data functionality'
    ],
    'widgets' => [
        'chart_products_wrong' => 'Hidden',
        'chart_products_ok' => 'Visible',
        'chart_products_total' => 'Total'
    ]
];
