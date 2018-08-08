<?php

/**
 * data
 * @author auto create
 */
class IsvResourceDo
{
	
	/** 
	 * 资源内容（当资源类型为TEMPLATE时，为空）
	 **/
	public $resource_content;
	
	/** 
	 * 资源id
	 **/
	public $resource_id;
	
	/** 
	 * 资源名称
	 **/
	public $resource_name;
	
	/** 
	 * 资源类型
	 **/
	public $resource_type;
	
	/** 
	 * 资源url（当资源类型为打印项时，为空）
	 **/
	public $resource_url;	
}
?>