<?php

/**
 * 商品信息
 * @author auto create
 */
class CainiaoInventoryProfitlossOrderitem
{
	
	/** 
	 * 批次号
	 **/
	public $batch_code;
	
	/** 
	 * 商品保质期信息，失效日期
	 **/
	public $due_date;
	
	/** 
	 * 库存类型 1 可销售库存（正品）  101 残次
	 **/
	public $inventory_type;
	
	/** 
	 * 商家对商品的编码
	 **/
	public $item_code;
	
	/** 
	 * 商品ID
	 **/
	public $item_id;
	
	/** 
	 * 商品数量
	 **/
	public $item_qty;
	
	/** 
	 * 生产地区
	 **/
	public $produce_area;
	
	/** 
	 * 生产编码，同一商品可能因商家不同有不同编码
	 **/
	public $produce_code;
	
	/** 
	 * 商品保质期信息，生产日期
	 **/
	public $produce_date;	
}
?>