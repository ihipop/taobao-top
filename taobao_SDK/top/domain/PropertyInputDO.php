<?php

/**
 * 属性输入特征DO
 * @author auto create
 */
class PropertyInputDO
{
	
	/** 
	 * property_id对应的属性是否可输入
	 **/
	public $is_allow_input;
	
	/** 
	 * 如果property_id对应的属性是子属性，is_root_allow_input标识该子属性的顶级父属性是否可输入。否则is_root_allow_input和is_allow_input
值是一样的。目前只有品牌会出现父属性不可输入，子属性可输入的情况
	 **/
	public $is_root_allow_input;
	
	/** 
	 * property_id对应的属性是不是子属性
	 **/
	public $is_sub_property;
	
	/** 
	 * 属性ID
	 **/
	public $property_id;	
}
?>