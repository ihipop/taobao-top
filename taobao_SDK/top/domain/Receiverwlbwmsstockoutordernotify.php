<?php

/**
 * 收件人信息
 * @author auto create
 */
class Receiverwlbwmsstockoutordernotify
{
	
	/** 
	 * 收件方地址
	 **/
	public $receiver_address;
	
	/** 
	 * 收件方区县
	 **/
	public $receiver_area;
	
	/** 
	 * 收件方城市
	 **/
	public $receiver_city;
	
	/** 
	 * 退供场景ECP填充供应商编码，调拨出库单ECP填充调拨入仓库编码, B2B出库单填写分销商ID(无分销ID的null)
	 **/
	public $receiver_code;
	
	/** 
	 * 收件方手机
	 **/
	public $receiver_mobile;
	
	/** 
	 * 收件方名称
	 **/
	public $receiver_name;
	
	/** 
	 * 收件方电话
	 **/
	public $receiver_phone;
	
	/** 
	 * 收件方省份
	 **/
	public $receiver_province;
	
	/** 
	 * 收件方邮编
	 **/
	public $receiver_zip_code;	
}
?>