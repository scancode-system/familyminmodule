<?php

namespace Modules\FamilyMin\Entities;

use Illuminate\Database\Eloquent\Model;

class FamilyMin extends Model
{
    protected $fillable = ['min_qty'];


    /* CREATE */
    public static function new()
    {
    	return self::create([]);
    }

    /* UPDATE */
    public function updateMinQty($min_qty)
    {
    	$this->min_qty = $min_qty;
    	$this->save();
    }

}
