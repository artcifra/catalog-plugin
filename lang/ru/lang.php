<?php

return [
    'plugin' => [
        'name' => 'Каталог',
        'description' => 'Простой каталог товаров с корзиной.'
    ],
    'catalog' => [
        'menu_label' => 'Каталог',
        'menu_description' => 'Управление каталогом товаров',
        'categories' => 'Категории товаров',
        'create_category' => 'Создать категорию',
    ],
    'categories' => [
        'side_menu' => 'Список категорий',
        'new_category' => 'Новая категория',
        'uncategorized' => 'Без категории'
    ],
    'category' => [
        'name' => 'Название категории',
        'description' => 'Описание',
        'uncategorized' => 'Без категории',
        'image' => 'Изображение'
    ],
    'products' => [
        'side_menu' => 'Товары',
        'list_title' => 'Управление товарами',
        'new_product' => 'Новый товар',
        'edit' => 'Изменить',
        'delete' => 'Удалить'
    ],
    'product' => [
        'title' => 'Товар',
        'id' => 'Системный идентификатор',
        'partID' => 'Номер детали',
        'name' => 'Название',
        'description' => 'Описание',
        'price' => 'Цена',
        'additional_tab' => 'Дополнительно'
    ],
    'import' => [
        'side_menu'=> 'Импорт из файла',
        'title' => 'Импорт данных из файла'
    ],
    'permissions' => [
        'access_products' => 'Доступ к списку товаров',
        'access_categories' => 'Доступ к списку категорий каталога',
        'access_import' => 'Возможность пакетного импорта данных'
    ],
    'widgets' => [
        'chart_products_wrong' => 'Не отображаются',
        'chart_products_ok' => 'Отображаются',
        'chart_products_total' => 'Всего элементов в каталоге'
    ]
];
