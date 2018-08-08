<?php

/**
 * 入参
 * @author auto create
 */
class UpdateResourceRequest
{
	
	/** 
	 * 要更新的资源内容
	 **/
	public $resource_data;
	
	/** 
	 * 更新的资源id，必须指定
	 **/
	public $resource_id;
	
	/** 
	 * 更新的资源名称，如果不更新名称，只需将原有的资源名称填入即可
	 **/
	public $resource_name;
	
	/** 
	 * 资源的所有者，分为"ISV"和"SELLER"两类
	 **/
	public $resource_owner_type;	
}
?>