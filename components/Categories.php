<?php namespace Kodji\Catalog\Components;

use Cms\Classes\ComponentBase;
use Kodji\Catalog\Models\Category;

class Categories extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Вывод списка категорий',
            'description' => 'Все категории каталога'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getCategories() {
        return Category::orderBy('id','desc')->where("published",1)->get();
    }
}