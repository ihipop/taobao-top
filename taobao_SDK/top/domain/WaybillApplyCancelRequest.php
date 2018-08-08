<?php

/**
 * 取消接口入参
 * @author auto create
 */
class WaybillApplyCancelRequest
{
	
	/** 
	 * TOP平台请求的ISV APPKEY
	 **/
	public $app_key;
	
	/** 
	 * CP快递公司编码
	 **/
	public $cp_code;
	
	/** 
	 * ERP订单号或包裹号
	 **/
	public $package_id;
	
	/** 
	 * 面单使用者编号
	 **/
	public $real_user_id;
	
	/** 
	 * 申请者ID
	 **/
	public $seller_id;
	
	/** 
	 * 交易订单列表
	 **/
	public $trade_order_list;
	
	/** 
	 * 电子面单号码
	 **/
	public $waybill_code;	
}
?>