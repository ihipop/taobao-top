<?php

/**
 * 商品信息
 * @author auto create
 */
class Orderitemwlbwmsreturnordernotify
{
	
	/** 
	 * 扩展属性, key-value结构，格式要求： 以英文分号“;”分隔每组key-value，以英文冒号“:”分隔key与value。如果value中带有分号，需要转成下划线“_”，如果带有冒号，需要转成中划线“-”
	 **/
	public $extend_fields;
	
	/** 
	 * 后端商品ID
	 **/
	public $item_id;
	
	/** 
	 * 商品名称
	 **/
	public $item_name;
	
	/** 
	 * 商品数量
	 **/
	public $item_quantity;
	
	/** 
	 * 平台交易订单编码,淘系交易请传入交易单号
	 **/
	public $order_item_id;
	
	/** 
	 * 平台交易订单编码,淘系交易请传入交易单号
	 **/
	public $order_source_code;
	
	/** 
	 * 平台交易子订单编码，交易单号传入，子交易编号必填
	 **/
	public $sub_source_code;	
}
?>