<?php

/**
 * 限时打折详情
 * @author auto create
 */
class LimitDiscountDetail
{
	
	/** 
	 * 限时打折结束时间。
	 **/
	public $end_time;
	
	/** 
	 * 该商品限时折扣
	 **/
	public $item_discount;
	
	/** 
	 * 商品的id(数字类型)
	 **/
	public $item_id;
	
	/** 
	 * 限时打折名称
	 **/
	public $limit_discount_name;
	
	/** 
	 * 每人限购数量，1、2、5、10000(不限)。
	 **/
	public $limit_num;
	
	/** 
	 * 限时打折开始时间。
	 **/
	public $start_time;	
}
?>