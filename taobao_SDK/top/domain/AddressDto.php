<?php

/**
 * 当前网点下的发货地址
 * @author auto create
 */
class AddressDto
{
	
	/** 
	 * 市名称（二级地址）
	 **/
	public $city;
	
	/** 
	 * 详细地址
	 **/
	public $detail;
	
	/** 
	 * 区名称（三级地址）
	 **/
	public $district;
	
	/** 
	 * 省名称（一级地址）
	 **/
	public $province;
	
	/** 
	 * 街道\镇名称（四级地址）
	 **/
	public $town;	
}
?>