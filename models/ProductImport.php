<?php namespace Kodji\Catalog\Models;

use Backend\Models\ImportModel;
use ApplicationException;

class ProductImport extends ImportModel
{
    public $table = 'kodji_catalog_products';

    public $rules = [
//        'name' => 'required',
    ];
    
    public function importData($results, $sessionKey = null)
    {
        $firstRow = reset($results);
        
        /*
         * Import
         */
        foreach ($results as $row => $data) {
            try {

                /*
                 * Find or create
                 */
                $product = Product::make();

                $productExists = $product->exists;

                /*
                 * Set attributes
                 */
                $product->category_id = 4;
                $product->is_shown = 1;
                $product->partID = array_get($data,'partID');
                $price = array_get($data,'price');
                $product->price = $price ? $price : 0;
                $product->name = array_get($data,'name');

                $product->save();
                
                /*
                 * Log results
                 */
                if ($productExists) {
                    $this->logUpdated();
                }
                else {
                    $this->logCreated();
                }
            }
            catch (Exception $ex) {
                $this->logError($row, $ex->getMessage());
            }
        }
    }
}