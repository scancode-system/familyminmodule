<?php

namespace Modules\FamilyMin\Entities;

use Illuminate\Database\Eloquent\Model;

class FamilyMin extends Model
{
    protected $fillable = ['product_sku', 'min_qty'];

    /* LOAD */
    public static function loadBySku($sku)
    {
        return self::where('product_sku', $sku)->first();
    }

    /* CREATE */
    public static function createBySku($sku)
    {
    	return self::create(['product_sku' => $sku]);
    }

    /* UPDATE */
    public function updateMinQty($min_qty)
    {
    	$this->min_qty = $min_qty;
    	$this->save();
    }

}
