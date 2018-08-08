<?php

/**
 * 类目属性度量衡相关数据
 * @author auto create
 */
class ItemTaosirDO
{
	
	/** 
	 * 表达式元素list
	 **/
	public $expr_el_list;
	
	/** 
	 * 数值小数点精度
	 **/
	public $precision;
	
	/** 
	 * 卖家可选单位List<单位id，单位名>
	 **/
	public $std_unit_list;
	
	/** 
	 * 时间类型：0表示非时间，1表示时间点，2表示时间范围
	 **/
	public $type;	
}
?>