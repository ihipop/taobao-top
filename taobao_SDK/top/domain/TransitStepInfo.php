<?php

/**
 * 物流跟踪信息的一条
 * @author auto create
 */
class TransitStepInfo
{
	
	/** 
	 * 节点说明 ，指明当前节点揽收、派送，签收。
	 **/
	public $action;
	
	/** 
	 * 描述
	 **/
	public $desc;
	
	/** 
	 * 地址地一
	 **/
	public $node_description;
	
	/** 
	 * 状态描述
	 **/
	public $status_desc;
	
	/** 
	 * 状态发生的时间
	 **/
	public $status_time;
	
	/** 
	 * 时间。。
	 **/
	public $time;	
}
?>