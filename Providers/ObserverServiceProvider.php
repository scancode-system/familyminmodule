<?php

namespace Modules\FamilyMin\Providers;

use Illuminate\Support\ServiceProvider;

use Modules\Product\Entities\Product;
use Modules\FamilyMin\Observers\ProductObserver;

use Modules\Order\Entities\Order;
use Modules\FamilyMin\Observers\OrderObserver;


class ObserverServiceProvider extends ServiceProvider {

	public function boot() {
		Product::observe(ProductObserver::class);
		Order::observe(OrderObserver::class);
	}

	public function register() {
        //
	}

}
