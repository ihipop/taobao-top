<?php

/**
 * 仓库收货商品信息
 * @author auto create
 */
class CainiaoStockInBillInventoryitem
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
	 * 库存类型1 可销售库存 101残次品
	 **/
	public $inventory_type;
	
	/** 
	 * 数量
	 **/
	public $item_qty;
	
	/** 
	 * 生产地区，仓库采集的商品信息，供记录参考
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