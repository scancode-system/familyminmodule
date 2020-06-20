<?php

namespace Modules\FamilyMin\Observers;

use Modules\Product\Entities\Product;
use Modules\FamilyMin\Entities\FamilyMin;

class ProductObserver
{

	public function creating(Product $product) {
		$family_min = FamilyMin::new();
		$product->family_min_id = $family_min->id;
	}	

}
