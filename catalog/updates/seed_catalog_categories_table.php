<?php namespace RainLab\User\Updates;

use Kodji\Catalog\Models\Category;
use October\Rain\Database\Updates\Seeder;

class SeedCatalogCategoriesTable extends Seeder
{
    public function run()
    {
        Category::create([
            'id' => 1,
            'name' => 'Без категории',
            'description' => 'Категория по умолчанию'
        ]);
    }
}
