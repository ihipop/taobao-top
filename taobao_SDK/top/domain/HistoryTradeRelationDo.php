<?php

/**
 * 历史标签记录
 * @author auto create
 */
class HistoryTradeRelationDo
{
	
	/** 
	 * 记录的创建时间
	 **/
	public $gmt_created;
	
	/** 
	 * 记录的最新修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 订单标签记录id
	 **/
	public $id;
	
	/** 
	 * 标签名称
	 **/
	public $tag_name;
	
	/** 
	 * 标签类型       1：官方标签      2：自定义标签
	 **/
	public $tag_type;
	
	/** 
	 * 标签值，json格式
	 **/
	public $tag_value;
	
	/** 
	 * 订单id
	 **/
	public $tid;
	
	/** 
	 * 该标签在消费者端是否显示,0:不显示,1：显示
	 **/
	public $visible;	
}
?>