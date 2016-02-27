<?php namespace Kodji\Catalog\Models;

use Backend\Models\ExportModel;
use ApplicationException;

/**
 * Products Export Model
 */
class ProductExport extends ExportModel
{
    public $table = 'kodji_catalog_products';

    public function exportData($columns, $sessionKey = null)
    {
        $result = self::make()
            ->get()
            ->toArray()
        ;
        return $result;
    }

}