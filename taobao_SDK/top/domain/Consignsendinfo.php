<?php

/**
 * 物流订单发货信息
 * @author auto create
 */
class Consignsendinfo
{
	
	/** 
	 * 菜鸟订单编码
	 **/
	public $cn_order_code;
	
	/** 
	 * 仓库订单完成时间
	 **/
	public $confirm_time;
	
	/** 
	 * 发票确认信息列表
	 **/
	public $invoince_confirm_list;
	
	/** 
	 * ERP订单编码
	 **/
	public $order_code;
	
	/** 
	 * 订单信息
	 **/
	public $order_item_list;
	
	/** 
	 * 订单类型 201 销售出库 502 换货出库 503 补发出库
	 **/
	public $order_type;
	
	/** 
	 * 订单状态 WMS_ACCEPT 接单成功 WMS_REJECT 接单失败 WMS_CONFIRMED 仓库生产完成
	 **/
	public $status;
	
	/** 
	 * 仓储编码
	 **/
	public $store_code;
	
	/** 
	 * 运单信息
	 **/
	public $tms_order_list;	
}
?>