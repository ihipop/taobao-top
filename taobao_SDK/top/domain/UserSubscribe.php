<?php

/**
 * 用户订购信息
 * @author auto create
 */
class UserSubscribe
{
	
	/** 
	 * 订购结束时间。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $end_date;
	
	/** 
	 * 订购开始时间。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $start_date;
	
	/** 
	 * 订购状况。应用订购者：subscribeUser;尚未订购：unsubscribeUser；非法用户：invalidateUser
	 **/
	public $status;
	
	/** 
	 * 0-无版本信息；1-初级版；2-中级版；3-高级版
	 **/
	public $version_no;	
}
?>