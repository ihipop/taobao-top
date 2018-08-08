<?php

/**
 * 入库订单确认请求
 * @author auto create
 */
class Requestwlbwmsstockinorderconfirm
{
	
	/** 
	 * 支持出入库单多次确认，多次收货后确认时  0 最后一次确认或是一次性确认；1 多次确认；当多次确认时，确认的ITEM种类全部被确认时，确认完成默认值为 0 例如输入2认为是0
	 **/
	public $confirm_type;
	
	/** 
	 * ERP订单编码
	 **/
	public $order_code;
	
	/** 
	 * 仓库订单入库时间
	 **/
	public $order_confirm_time;
	
	/** 
	 * 订单商品列表
	 **/
	public $order_items;
	
	/** 
	 * 单据类型(501销退入库单、504换货入库单、504换货入库单、601采购入库单、904其他入库单）
	 **/
	public $order_type;
	
	/** 
	 * 外部业务编码，类似消息ID，多次确认时，每次传入要求唯一；
	 **/
	public $out_biz_code;
	
	/** 
	 * 仓配订单编码
	 **/
	public $store_order_code;	
}
?>