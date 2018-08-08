<?php

/**
 * 损益单回传信息
 * @author auto create
 */
class WlbWmsInventoryCount
{
	
	/** 
	 * 移库单对应的业务单据号
	 **/
	public $adjust_biz_key;
	
	/** 
	 * 调整原因 （仓内多货、 仓内少货、 货权转移、 临保转残、 库内破损、 其他）
	 **/
	public $adjust_reason_type;
	
	/** 
	 * 调整类型 1、盘点单 2、移库单（调整单）
	 **/
	public $adjust_type;
	
	/** 
	 * 订单商品信息列表
	 **/
	public $item_list;
	
	/** 
	 * ERP订单号
	 **/
	public $order_code;
	
	/** 
	 * 2013-01-01 10:00:00
	 **/
	public $order_confirm_time;
	
	/** 
	 * 701
	 **/
	public $order_type;
	
	/** 
	 * 2456
	 **/
	public $out_biz_code;
	
	/** 
	 * --
	 **/
	public $remark;
	
	/** 
	 * 1011
	 **/
	public $store_code;
	
	/** 
	 * LBX0001
	 **/
	public $store_order_code;	
}
?>