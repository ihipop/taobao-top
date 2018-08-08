<?php

/**
 * 发货订单信息
 * @author auto create
 */
class Consignorder
{
	
	/** 
	 * 仓库物流订单信息列表
	 **/
	public $consign_order_item_list;
	
	/** 
	 * 错误编码
	 **/
	public $error_code;
	
	/** 
	 * 错误信息
	 **/
	public $error_msg;
	
	/** 
	 * 仓库编码
	 **/
	public $store_code;
	
	/** 
	 * 仓库订单编码
	 **/
	public $store_order_code;
	
	/** 
	 * 是否成功
	 **/
	public $success;
	
	/** 
	 * 配送编码
	 **/
	public $tms_code;	
}
?>