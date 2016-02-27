<?php namespace Kodji\Catalog\Components;

use Cms\Classes\ComponentBase;
use Kodji\Catalog\Models\Category;
use Kodji\Catalog\Models\Product;

class CategoryProducts extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Список товаров',
            'description' => 'Список товаров в категории'
        ];
    }

    public function defineProperties()
    {
        return [
            'id' => [
                'title'       => 'категория',
                'description' => 'Название параметра идентификатора категории',
                'default'     => '{{ :id }}',
                'type'        => 'string'
            ]
        ];
    }

    public function getProducts() {
        $catId = $this->property('id');
        return Product::where('category_id', $catId )
            ->isShown()
            ->orderBy('name','asc')->get();
    }
}