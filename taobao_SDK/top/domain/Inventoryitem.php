<?php

/**
 * 商品属性列表
 * @author auto create
 */
class Inventoryitem
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
	 * 库存类型：1 可销售库存 (正品) 101 类型用来定义残次品 201 冻结类型库存 301 在途库存
	 **/
	public $inventory_type;
	
	/** 
	 * 数量
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