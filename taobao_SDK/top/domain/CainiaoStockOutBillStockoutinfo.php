<?php

/**
 * 出库单信息
 * @author auto create
 */
class CainiaoStockOutBillStockoutinfo
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
	 * 订单商品列表
	 **/
	public $order_item_list;
	
	/** 
	 * 单据类型 903 普通出库单 305 B2B出库单 901 退供出库单
	 **/
	public $order_type;
	
	/** 
	 * 包裹信息列表，包含每个包裹使用的快递信息
	 **/
	public $package_info_list;
	
	/** 
	 * 入库单状态
	 **/
	public $status;	
}
?>