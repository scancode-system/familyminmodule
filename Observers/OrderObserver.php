<?php

namespace Modules\FamilyMin\Observers;

use Modules\Order\Entities\Order;
use Modules\Order\Entities\Item;
use Modules\Order\Entities\Status;
use Modules\Order\Repositories\ItemRepository;
use Carbon\Carbon;
use Exception;

class OrderObserver
{

	public function updating(Order $order)
	{
		if($order->isDirty('status_id')){
			if($order->status_id == STATUS::COMPLETED){
				foreach ($order->items as $item) {
					$this->checkItem($item);
				}
			} 
		}
	}

	private function checkItem(Item $item){
		$min_qty = $item->product->family_min->min_qty;
		$items = ItemRepository::family($item); 


		$qty = 0;
		foreach ($items as $family_item) {
			$qty += $family_item->qty;
		}

		if($min_qty > $qty){
			throw new Exception('A familia de produtos '.$item->item_product->sku.' não possui a quantidade mínima configurada pelo sistema.');
		}

	}

}
