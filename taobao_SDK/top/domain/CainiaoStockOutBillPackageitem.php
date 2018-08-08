<?php

/**
 * 包裹里面的商品信息
 * @author auto create
 */
class CainiaoStockOutBillPackageitem
{
	
	/** 
	 * 库存类型1 可销售库存 101残次品
	 **/
	public $inventory_type;
	
	/** 
	 * ERP商品编码
	 **/
	public $item_code;
	
	/** 
	 * 菜鸟商品编码
	 **/
	public $item_id;
	
	/** 
	 * 数量
	 **/
	public $item_qty;
	
	/** 
	 * ERP订单明细ID
	 **/
	public $order_item_id;	
}
?>