<?php

/**
 * 优惠券数据结构
 * @author auto create
 */
class Coupon
{
	
	/** 
	 * 订单满多少分才能用这个优惠券，501就是满501分能使用。注意：返回的是“分”，不是“元”
	 **/
	public $condition;
	
	/** 
	 * 优惠券ID
	 **/
	public $coupon_id;
	
	/** 
	 * 优惠券创建时间
	 **/
	public $creat_time;
	
	/** 
	 * 优惠券的创建渠道，自己创建/他人创建
	 **/
	public $create_channel;
	
	/** 
	 * 优惠券的面值，返回的是“分”，不是“元”，500代表500分相当于5元
	 **/
	public $denominations;
	
	/** 
	 * 优惠券的截止日期
	 **/
	public $end_time;	
}
?>