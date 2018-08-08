<?php

/**
 * 发货订单信息
 * @author auto create
 */
class WlbWmsConsignOrderConfirm
{
	
	/** 
	 * 支持出入库单多次确认 0 最后一次确认或是一次性确认； 1 多次确认；当多次确认时，确认的ITEM种类全部被确认时，确认完成默认值为 0 例如输入2认为是0
	 **/
	public $confirm_type;
	
	/** 
	 * 系统自动生成
	 **/
	public $invoince_confirms;
	
	/** 
	 * 商家订单编码
	 **/
	public $order_code;
	
	/** 
	 * 订单出库完成时间
	 **/
	public $order_confirm_time;
	
	/** 
	 * 拆合单信息，如果仓库合并ERP订单后，将多个ERP订单合并在这个字段中；
	 **/
	public $order_join;
	
	/** 
	 * 单据类型 201 一般交易出库单 202 B2B交易出库单 502 换货出库单 503 补发出库单
	 **/
	public $order_type;
	
	/** 
	 * 外部业务编码，消息ID，用于去重，一个合作伙伴中要求唯一，多次确认时，每次传入要求唯一
	 **/
	public $out_biz_code;
	
	/** 
	 * 仓储订单编码
	 **/
	public $store_order_code;
	
	/** 
	 * 系统自动生成
	 **/
	public $tms_orders;	
}
?>