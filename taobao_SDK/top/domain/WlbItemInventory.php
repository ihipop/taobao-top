<?php

/**
 * 物流宝商品库存
 * @author auto create
 */
class WlbItemInventory
{
	
	/** 
	 * 商品id
	 **/
	public $item_id;
	
	/** 
	 * 锁定库存数量
	 **/
	public $lock_quantity;
	
	/** 
	 * 库存数量
	 **/
	public $quantity;
	
	/** 
	 * 仓库编码
	 **/
	public $store_code;
	
	/** 
	 * SELLALBE 可销售库存
DEFECTIVE 残次
JISHUN 机损
XIANGSHUN 箱损
FREEZE 冻结库存
ONROAD 在途库存
	 **/
	public $type;	
}
?>