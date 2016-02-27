<?php namespace Kodji\Catalog\Models;

use Model;
use Kodji\Catalog\Models\Product;

/**
 * Category Model
 */
class Category extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'kodji_catalog_categories';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'product' => ['Kodji\Catalog\Models\Product', 'table' => 'kodji_catalog_products']
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'image' => ['System\Models\File']
    ];
    public $attachMany = [];

    public function getProductsCountAttribute()
    {
        return $this->product()->count();
    }
}
