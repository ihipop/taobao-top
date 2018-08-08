<?php

/**
 * 订单商品信息
 * @author auto create
 */
class Orderitemwlbwmsstockoutordernotify
{
	
	/** 
	 * 批次号
	 **/
	public $batch_code;
	
	/** 
	 * 到货日期
	 **/
	public $due_date;
	
	/** 
	 * 订单商品拓展属性数据
	 **/
	public $extend_fields;
	
	/** 
	 * 库存类型
	 **/
	public $inventory_type;
	
	/** 
	 * ERP商品ID
	 **/
	public $item_id;
	
	/** 
	 * 商品数量
	 **/
	public $item_quantity;
	
	/** 
	 * ERP主键ID
	 **/
	public $order_item_id;
	
	/** 
	 * 生产编码，同一商品可能因商家不同有不同编码
	 **/
	public $produce_code;
	
	/** 
	 * 生产日期
	 **/
	public $produce_date;	
}
?>