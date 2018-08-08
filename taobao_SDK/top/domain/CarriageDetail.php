<?php

/**
 * 物流公司资费相关信息
 * @author auto create
 */
class CarriageDetail
{
	
	/** 
	 * 续费（单位：元）
	 **/
	public $add_fee;
	
	/** 
	 * 续重（单位：千克）
	 **/
	public $add_weight;
	
	/** 
	 * 破损赔付
	 **/
	public $damage_payment;
	
	/** 
	 * 物流公司揽收时间段
	 **/
	public $got_time;
	
	/** 
	 * 首费（单位：元）
	 **/
	public $initial_fee;
	
	/** 
	 * 首重（单位：千克）
	 **/
	public $initial_weight;
	
	/** 
	 * 丢单赔付
	 **/
	public $lost_payment;
	
	/** 
	 * 快件送达所需的时间(单位：天)
	 **/
	public $way_day;	
}
?>