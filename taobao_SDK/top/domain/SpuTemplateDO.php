<?php

/**
 * SPU发布模板，定义了产品发布需要那些关键属性，绑定属性。
 * @author auto create
 */
class SpuTemplateDO
{
	
	/** 
	 * 产品绑定属性，内容为属性ID(PID)的列表,绑定属性肯定在类目上有，对应属性的类目特征，子属性请根据PID到类目上去取
	 **/
	public $affect_properties;
	
	/** 
	 * 类目ID
	 **/
	public $category_id;
	
	/** 
	 * 品类ID，和类目ID类似
	 **/
	public $commodity_id;
	
	/** 
	 * 过滤属性，内容有属性ID(PID)列表，很重要的属性，filter_properties包含的属性，必须填写
	 **/
	public $filter_properties;
	
	/** 
	 * 产品关键属性，内容为属性ID(PID)的列表，注意关键属性可以在类目上不存在。不存在的PID，默认为输入，没有子属性。属性名称在prop_name_str中取
	 **/
	public $key_properties;
	
	/** 
	 * 预留
	 **/
	public $prop_features;
	
	/** 
	 * 属性名称扁平化结构，只保证不在类目上的CP有值
	 **/
	public $prop_name_str;
	
	/** 
	 * 模板ID，发布产品，必须放到Product中
	 **/
	public $template_id;	
}
?>