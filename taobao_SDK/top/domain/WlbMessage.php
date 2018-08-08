<?php

/**
 * 通道消息
 * @author auto create
 */
class WlbMessage
{
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 消息通道ID
	 **/
	public $id;
	
	/** 
	 * 通知消息编码： STOCK_IN_NOT_CONSISTENT---入库单不一致 CANCEL_ORDER_SUCCESS---取消订单成功 CANCEL_ORDER_FAILURE---取消订单失败 INVENTORY_CHECK---盘点   INVENTORY_CHECK---盘点消息  ORDER_REJECT--wms拒单  ORDER_CONFIRMED--订单处理成功 WMS_FAILED--wms处理失败
	 **/
	public $msg_code;
	
	/** 
	 * 通知内容：msg_code为STOCK_IN_NOT_CONSISTENT时,msg_content为:orderCode:code;orderItemId:111;itemId:123;planQuantity:10;relQuantity:6; 
msg_code为CANCEL_ORDER_SUCCESS及其它时,msg_content为：orderCode:code;
msg_code为CANCEL_ORDER_SUCCESS及其它时,msg_content为：orderCode:code; msg_code为INVENTORY_CHECK时，msg_content为orderCode:code;
	 **/
	public $msg_content;
	
	/** 
	 * 消息描述
	 **/
	public $msg_description;
	
	/** 
	 * 消息状态： 不需要确认：NO_NEED_CONFIRM 已确认：CONFIRMED 待确认：TO_BE_CONFIRM
	 **/
	public $status;
	
	/** 
	 * 用户ID
	 **/
	public $user_id;	
}
?>