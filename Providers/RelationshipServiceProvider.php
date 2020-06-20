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
            return $product->belongsTo(FamilyMin::class, 'family_min_id');
        });

    }



    public function register()
    {

    }

}
