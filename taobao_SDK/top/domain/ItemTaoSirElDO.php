<?php

/**
 * 度量衡表达式DO数据结构
 * @author auto create
 */
class ItemTaoSirElDO
{
	
	/** 
	 * 是否输入框
	 **/
	public $is_input;
	
	/** 
	 * 是否文本元素，用于显示也用于组装value_name，比如：操作符
	 **/
	public $is_label;
	
	/** 
	 * 是否只用于显示的文本元素
	 **/
	public $is_show_label;
	
	/** 
	 * 显示文本
	 **/
	public $text;
	
	/** 
	 * 0 - 类型为label元素，只用于展示，不用于组装value_name；
1 - 类型为label元素，用于展示，用于组装value_name；
2 - 类型为输入狂元素，主要用于卖家输入数据. 卖家填写完后需要重新设置该元素的文本数据；
	 **/
	public $type;	
}
?>