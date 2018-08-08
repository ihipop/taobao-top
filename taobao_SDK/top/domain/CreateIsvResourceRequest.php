<?php

/**
 * isv创建资源的参数
 * @author auto create
 */
class CreateIsvResourceRequest
{
	
	/** 
	 * isv资源类型，"TEMPLATE"表示模板资源，"PRINT_ITEM"表示打印项
	 **/
	public $isv_resource_type;
	
	/** 
	 * 资源内容
	 **/
	public $resource_data;
	
	/** 
	 * 资源名称
	 **/
	public $resource_name;	
}
?>