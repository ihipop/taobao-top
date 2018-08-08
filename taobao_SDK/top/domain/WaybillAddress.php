<?php

/**
 * 收\发货地址
 * @author auto create
 */
class WaybillAddress
{
	
	/** 
	 * 详细地址
	 **/
	public $address_detail;
	
	/** 
	 * --
	 **/
	public $address_format;
	
	/** 
	 * 区名称（三级地址）
	 **/
	public $area;
	
	/** 
	 * 三级地址代码
	 **/
	public $area_code;
	
	/** 
	 * 市名称（二级地址）
	 **/
	public $city;
	
	/** 
	 * 二级地址代码
	 **/
	public $city_code;
	
	/** 
	 * 末级地址
	 **/
	public $division_id;
	
	/** 
	 * 省名称（一级地址）
	 **/
	public $province;
	
	/** 
	 * 一级地址代码
	 **/
	public $province_code;
	
	/** 
	 * 街道\镇名称（四级地址）
	 **/
	public $town;
	
	/** 
	 * 四级地址代码
	 **/
	public $town_code;
	
	/** 
	 * waybill 地址记录ID(非地址库ID)
	 **/
	public $waybill_address_id;	
}
?>