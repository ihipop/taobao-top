<?php

/**
 * 运单信息列表
 * @author auto create
 */
class Tmsorder
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
	 * 包裹长度，单位：毫米
	 **/
	public $package_length;
	
	/** 
	 * 包材信息
	 **/
	public $package_material_list;
	
	/** 
	 * 包裹重量，单位：克
	 **/
	public $package_weight;
	
	/** 
	 * 包裹宽度，单位：毫米
	 **/
	public $package_width;
	
	/** 
	 * 快递公司服务编码
	 **/
	public $tms_code;
	
	/** 
	 * 包裹里面的商品信息列表
	 **/
	public $tms_item_list;
	
	/** 
	 * 运单编码
	 **/
	public $tms_order_code;	
}
?>