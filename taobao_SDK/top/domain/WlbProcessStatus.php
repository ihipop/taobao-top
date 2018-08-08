<?php

/**
 * 物流宝订单流转信息对象
 * @author auto create
 */
class WlbProcessStatus
{
	
	/** 
	 * 状态内容
	 **/
	public $content;
	
	/** 
	 * 操作时间
	 **/
	public $operate_time;
	
	/** 
	 * 操作人
	 **/
	public $operater;
	
	/** 
	 * 物流宝订单编码
	 **/
	public $order_code;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * 订单操作状态：WMS_ACCEPT;WMS_PRINT;WMS_PICK;WMS_CHECK;WMS_PACKAGE;WMS_CONSIGN;WMS_CANCEL;WMS_UNKNOWN;WMS_CONFIRMED
TMS_ACCEPT;TMS_STATION_IN;TMS_STATION_OUT;TMS_SIGN;TMS_REJECT;TMS_CANCEL;TMS_UNKNOW;SYS_UNKNOWN
	 **/
	public $status_code;
	
	/** 
	 * 仓库编码
	 **/
	public $store_code;
	
	/** 
	 * 仓库合作公司编码
	 **/
	public $store_tp_code;
	
	/** 
	 * tms合作公司订单编码
	 **/
	public $tms_order_code;
	
	/** 
	 * tms合作公司编码
	 **/
	public $tms_tp_code;	
}
?>