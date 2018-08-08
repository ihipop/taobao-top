<?php

/**
 * 面单申请
 * @author auto create
 */
class WaybillApplyNewRequest
{
	
	/** 
	 * 物流服务商编码
	 **/
	public $cp_code;
	
	/** 
	 * 收\发货地址
	 **/
	public $shipping_address;
	
	/** 
	 * 订单数据
	 **/
	public $trade_order_info_cols;	
}
?>