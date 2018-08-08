<?php

/**
 * 面单申请
 * @author auto create
 */
class WaybillApplyRequest
{
	
	/** 
	 * TOP平台请求的ISV APPKEY
	 **/
	public $app_key;
	
	/** 
	 * 物流服务商ID
	 **/
	public $cp_code;
	
	/** 
	 * 商家ID
	 **/
	public $seller_id;
	
	/** 
	 * 发货地址
	 **/
	public $shipping_address;	
}
?>