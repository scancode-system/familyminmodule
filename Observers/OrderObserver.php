<?php

namespace Modules\FamilyMin\Observers;

use Modules\Order\Entities\Order;
use Modules\Order\Entities\Status;
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
		$qtd_min = $item->product->family_min->qtd_min;
		$items = ItemRepository::family($item); 

		$qty = 0;
		foreach ($items as $item) {
			$qty =+ $item->qty;
		}

		if($qtd_min <= $qty){
			throw new Exception('A familia de produtos '.$item->item_product->sku.' não possui a quantidade mínima configurada pelo sistema.');
		}

	}

}
