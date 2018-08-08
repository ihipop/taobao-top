<?php

/**
 * 库存占用明细
 * @author auto create
 */
class Iteminventory
{
	
	/** 
	 * 菜鸟组合货品ID
	 **/
	public $comb_item_id;
	
	/** 
	 * 错误码
	 **/
	public $error_code;
	
	/** 
	 * 错误信息
	 **/
	public $error_msg;
	
	/** 
	 * 菜鸟货品编码
	 **/
	public $item_code;
	
	/** 
	 * 菜鸟货品ID
	 **/
	public $item_id;
	
	/** 
	 * 占用库存数量
	 **/
	public $item_ocpy_qty;
	
	/** 
	 * 交易编码
	 **/
	public $order_source_code;
	
	/** 
	 * 仓库编码
	 **/
	public $store_code;
	
	/** 
	 * 子交易编码
	 **/
	public $sub_source_code;
	
	/** 
	 * 是否成功
	 **/
	public $success;	
}
?>