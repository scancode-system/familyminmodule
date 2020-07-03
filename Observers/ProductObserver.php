<?php

namespace Modules\FamilyMin\Observers;

use Modules\Product\Entities\Product;
use Modules\FamilyMin\Entities\FamilyMin;

class ProductObserver
{

	public function creating(Product $product) {

		if(!FamilyMin::loadBySku($product->sku)){
			FamilyMin::createBySku($product->sku);
		}

	}

	/*public function updating(Product $product) {



	}*/
	/*public function created(Product $product) {

		if(!FamilyMin::loadBySku($product->sku)){
			FamilyMin::createBySku($product->sku);
		}

	}*/

	public function updating(Product $product) {

		if(!FamilyMin::loadBySku($product->sku)){
			FamilyMin::createBySku($product->sku);
		}

	}

}
