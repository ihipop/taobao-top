<?php

/**
 * 商家创建资源参数
 * @author auto create
 */
class CreateSellerResourceRequest
{
	
	/** 
	 * 父资源id，商家资源只能从isv模板或菜鸟标准模板继承修改，不能单独创建
	 **/
	public $parent_resource_id;
	
	/** 
	 * 资源内容
	 **/
	public $resource_data;
	
	/** 
	 * 资源名称
	 **/
	public $resource_name;
	
	/** 
	 * 商家资源类型，共两类：ISV_RESOURCE -- 表示继承自isv的资源；CAINIAO_RESOURCE  -- 表示菜鸟的资源
	 **/
	public $seller_resource_type;	
}
?>