<?php

/**
 * 订单商品信息列表
 * @author auto create
 */
class ItemListWlbWmsInventoryCount
{
	
	/** 
	 * WMS批次号
	 **/
	public $batch_code;
	
	/** 
	 * 商品过期日期YYYY-MM-DD
	 **/
	public $due_date;
	
	/** 
	 * 库存类型 1 正品，101 残次，102 机损，103 箱损，201 冻结库存，301 在途库存
	 **/
	public $inventory_type;
	
	/** 
	 * 后端商品ID
	 **/
	public $item_id;
	
	/** 
	 * 生产批号
	 **/
	public $produce_code;
	
	/** 
	 * 商品过期日期YYYY-MM-DD
	 **/
	public $product_date;
	
	/** 
	 * 商品数量
	 **/
	public $quantity;	
}
?>