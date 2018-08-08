<?php

/**
 * 销退订单信息
 * @author auto create
 */
class CainiaoReturnBillReturnorderinfo
{
	
	/** 
	 * 仓库订单编码，LBX号
	 **/
	public $cn_order_code;
	
	/** 
	 * 仓库订单完成时间
	 **/
	public $confirm_time;
	
	/** 
	 * ERP订单号
	 **/
	public $order_code;
	
	/** 
	 * 订单商品信息列表
	 **/
	public $order_item_list;
	
	/** 
	 * 单据类型： 501 退货入库
	 **/
	public $order_type;
	
	/** 
	 * 此销退订单对应原销售订单的菜鸟订单号
	 **/
	public $pre_cn_order_code;	
}
?>