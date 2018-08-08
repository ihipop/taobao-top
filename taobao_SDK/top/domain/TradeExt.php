<?php

/**
 * 交易扩展表信息
 * @author auto create
 */
class TradeExt
{
	
	/** 
	 * 关闭订单前扩展标识位
	 **/
	public $before_close_flag;
	
	/** 
	 * 确认收货前扩展标识位
	 **/
	public $before_confirm_flag;
	
	/** 
	 * enable前扩展标识位
	 **/
	public $before_enable_flag;
	
	/** 
	 * 修改前扩展标识位
	 **/
	public $before_modify_flag;
	
	/** 
	 * 付款前扩展标识位
	 **/
	public $before_pay_flag;
	
	/** 
	 * 评价前扩展标识位
	 **/
	public $before_rate_flag;
	
	/** 
	 * 退款前扩展标识位
	 **/
	public $before_refund_flag;
	
	/** 
	 * 发货前扩展标识位
	 **/
	public $before_ship_flag;
	
	/** 
	 * attributes标记
	 **/
	public $ext_attributes;
	
	/** 
	 * 第三方个性化数据
	 **/
	public $extra_data;
	
	/** 
	 * 第三方状态，第三方自由定义
	 **/
	public $third_party_status;	
}
?>