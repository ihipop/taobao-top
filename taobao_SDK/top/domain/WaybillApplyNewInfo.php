<?php

/**
 * 申请面单返回数据
 * @author auto create
 */
class WaybillApplyNewInfo
{
	
	/** 
	 * 包裹对应的派件（收件）物流服务商网点（分支机构）代码
	 **/
	public $consignee_branch_code;
	
	/** 
	 * 包裹对应的派件（收件）物流服务商网点（分支机构）名称
	 **/
	public $consignee_branch_name;
	
	/** 
	 * 预留字段
	 **/
	public $feature;
	
	/** 
	 * 集包地代码
	 **/
	public $package_center_code;
	
	/** 
	 * 集包地名称
	 **/
	public $package_center_name;
	
	/** 
	 * 打印配置项，传给ali-print组件
	 **/
	public $print_config;
	
	/** 
	 * --
	 **/
	public $result;
	
	/** 
	 * 面单号对应的物流服务商网点（分支机构）代码
	 **/
	public $shipping_branch_code;
	
	/** 
	 * 面单号对于的物流服务商网点（分支机构）名称
	 **/
	public $shipping_branch_name;
	
	/** 
	 * 根据收货地址返回大头笔信息
	 **/
	public $short_address;
	
	/** 
	 * 面单对应的订单列
	 **/
	public $trade_order_info;
	
	/** 
	 * 返回的面单号
	 **/
	public $waybill_code;	
}
?>