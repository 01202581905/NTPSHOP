<?php
namespace App;

class Cart
{
	public $items = null;
	public $totalQuantity = 0;
	public $totalPrice = 0;
	public function __construct($oldCart)
	{
		if($oldCart)
		{
			$this->items = $oldCart->items;
			$this->totalQuantity = $oldCart->totalQuantity;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	//thêm một sản phẩm
	public function add($item,$Product_ID)
	{
		$giohang = ['quantity'=>0,'price'=>$item->Price,'Price_Product'=>$item->Price_Product,'Discount'=>$item->Discount,'item'=>$item];
		if($this->items)
		{
			if(array_key_exists($Product_ID, $this->items))
			{
				$giohang = $this->items[$Product_ID];
			}
		}
		$giohang['quantity']++;
		if($item->Discount != 0)
		{
			$item->Price = $item->Discount;
		}
		else
		{
			$item->Price = $item->Price_Product;
		}
		$giohang['price'] = $item->Price_Product*$giohang['quantity'];
		$this->items[$Product_ID] = $giohang;
		$this->totalQuantity++;
		$this->totalPrice += $item->Price;
	}

	public function down($item,$Product_ID)
	{
		$giohang = ['quantity'=>0,'price'=>$item->Price,'Price_Product'=>$item->Price_Product,'Discount'=>$item->Discount,'item'=>$item];
		if($this->items)
		{
			if(array_key_exists($Product_ID, $this->items))
			{
				$giohang = $this->items[$Product_ID];
			}
		}
		$giohang['quantity']--;
		if($item->Discount != 0)
		{
			$item->Price = $item->Discount;
		}
		else
		{
			$item->Price = $item->Price_Product;
		}
		$giohang['price'] = $item->Price_Product*$giohang['quantity'];
		$this->items[$Product_ID] = $giohang;
		$this->totalQuantity--;
		$this->totalPrice -= $item->Price;
	}

	public function add2($item,$Product_ID,$soluong)
	{
		$giohang = ['quantity'=>0,'price'=>$item->Price,'Price_Product'=>$item->Price_Product,'Discount'=>$item->Discount,'item'=>$item];
		if($this->items)
		{
			if(array_key_exists($Product_ID, $this->items))
			{
				$giohang = $this->items[$Product_ID];
			}
		}
		$giohang['quantity']+=$soluong;
		if($item->Discount != 0)
		{
			$item->Price = $item->Discount*$soluong;
		}
		else
		{
			$item->Price = $item->Price_Product*$soluong;
		}
		$giohang['price'] = $item->Price_Product*$giohang['quantity'];
		$this->items[$Product_ID] = $giohang;
		$this->totalQuantity+= $soluong;
		$this->totalPrice += $item->Price;
	}

	//xóa một sản phẩm
	public function reduceByOne($Product_ID)
	{
		$this->items[$Product_ID]['quantity']--;
		$this->items[$Product_ID]['price'] -= $this->items[$Product_ID]['item']['price'];
		$this->totalQuantity--;
		$this->totalPrice -= $this->items[$Product_ID]['item']['price'];
		if($this->items[$Product_ID]['quantity'] <= 0)
		{
			unset($this->item[$Product_ID]);
		}
	}

	//xóa nhiều
	public function removeItem($Product_ID)
	{
		$this->totalQuantity -= $this->items[$Product_ID]['quantity'];
		$this->totalPrice -= $this->items[$Product_ID]['price'];
		unset($this->items[$Product_ID]);
	}
}	
	
?>