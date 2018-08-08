<?php

/**
 * 资源发布参数
 * @author auto create
 */
class PublishResourceRequest
{
	
	/** 
	 * 要发布的资源id
	 **/
	public $resource_id;
	
	/** 
	 * 资源所有者，分为"ISV"和"SELLER"两类
	 **/
	public $resource_owner_type;	
}
?>