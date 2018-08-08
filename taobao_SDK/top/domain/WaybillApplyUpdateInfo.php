<?php

/**
 * 更新面单数据
 * @author auto create
 */
class WaybillApplyUpdateInfo
{
	
	/** 
	 * 收货网点信息
	 **/
	public $consignee_branch_code;
	
	/** 
	 * 收货网点编码
	 **/
	public $consignee_branch_name;
	
	/** 
	 * --
	 **/
	public $desc;
	
	/** 
	 * 集包地、目的地中心代码。打印时根据该 code 生成目的地中心的条码，条码生成的算法与对应的电子面单条码一致
	 **/
	public $package_center_code;
	
	/** 
	 * 集包地、目的地中心名称
	 **/
	public $package_center_name;
	
	/** 
	 * --
	 **/
	public $result;
	
	/** 
	 * 挑拣规则（大头笔信息）
	 **/
	public $short_address;
	
	/** 
	 * --
	 **/
	public $trade_order_info;
	
	/** 
	 * --
	 **/
	public $waybill_code;	
}
?>