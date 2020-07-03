<?php

namespace Modules\FamilyMin\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

use Modules\Product\Entities\Product;
use Modules\FamilyMin\Entities\FamilyMin;


class RelationshipServiceProvider extends ServiceProvider
{


    public function boot()
    {
        Product::addDynamicRelation('family_min', function (Product $product) {
            return $product->hasOne(FamilyMin::class, 'product_sku', 'sku');
        });

    }



    public function register()
    {

    }

}
