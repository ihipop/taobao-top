<?php

/**
 * 包裹信息
 * @author auto create
 */
class CainiaoStockOutBillPackageinfo
{
	
	/** 
	 * 包裹号
	 **/
	public $package_code;
	
	/** 
	 * 包裹高度，单位：毫米
	 **/
	public $package_height;
	
	/** 
	 * 包裹里面的商品信息列表
	 **/
	public $package_item_list;
	
	/** 
	 * 包裹长度，单位：毫米
	 **/
	public $package_length;
	
	/** 
	 * 包裹质量，单位：克
	 **/
	public $package_weight;
	
	/** 
	 * 包裹宽度,单位：毫米
	 **/
	public $package_width;
	
	/** 
	 * 快递公司服务编码
	 **/
	public $tms_code;
	
	/** 
	 * 运单编码
	 **/
	public $tms_order_code;	
}
?>