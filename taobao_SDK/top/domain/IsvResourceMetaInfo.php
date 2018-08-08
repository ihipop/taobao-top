<?php

/**
 * isvResourceMetaInfo
 * @author auto create
 */
class IsvResourceMetaInfo
{
	
	/** 
	 * 是否需要发布，如果online_resource_data中没有值，则为true，表示需要发布
	 **/
	public $need_publish;
	
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
}
?>