<?php

/**
 * 入库单商品信息
 * @author auto create
 */
class CainiaoStockInBillStockininfo
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
	 * ERP订单号
	 **/
	public $order_code;
	
	/** 
	 * 入库单信息
	 **/
	public $order_item_list;
	
	/** 
	 * 单据类型：  904 普通入库 306 B2B入库单 601 采购入库
	 **/
	public $order_type;
	
	/** 
	 * 入库单状态 WMS_ACCEPT 接单成功 WMS_REJECT 接单失败WMS_CONFIRMED 仓库生产完成
	 **/
	public $status;	
}
?>