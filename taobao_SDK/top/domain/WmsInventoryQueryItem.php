<?php

/**
 * 商品详情
 * @author auto create
 */
class WmsInventoryQueryItem
{
	
	/** 
	 * 库存批次号，type=2时字段有返回值。
	 **/
	public $batch_code;
	
	/** 
	 * 渠道编码，type=3时字段有返回值。（TB 淘系，OTHERS 其他）
	 **/
	public $channel_code;
	
	/** 
	 * 失效日期，type=2时字段有返回值。
	 **/
	public $due_date;
	
	/** 
	 * 库存类型(1 正品 101 残次 102 机损 103 箱损 201 冻结库存 301 在途库存 )
	 **/
	public $inventory_type;
	
	/** 
	 * 商品ID
	 **/
	public $item_id;
	
	/** 
	 * 锁库存数量
	 **/
	public $lock_quantity;
	
	/** 
	 * 生产日期，type=2时字段有返回值
	 **/
	public $produce_date;
	
	/** 
	 * 库存数量
	 **/
	public $quantity;
	
	/** 
	 * 仓库编码
	 **/
	public $store_code;	
}
?>