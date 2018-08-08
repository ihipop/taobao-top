<?php

/**
 * 交易订单的帐务信息详情
 * @author auto create
 */
class TradeAmount
{
	
	/** 
	 * 支付宝交易号，如：2009112081173831
	 **/
	public $alipay_no;
	
	/** 
	 * 买家货到付款服务费。精确到2位小数;单位:元。如:12.07，表示:12元7分
	 **/
	public $buyer_cod_fee;
	
	/** 
	 * 买家获得积分,返点的积分。格式:100;单位:个
	 **/
	public $buyer_obtain_point_fee;
	
	/** 
	 * 货到付款服务费。精确到2位小数;单位:元。如:12.07，表示:12元7分
	 **/
	public $cod_fee;
	
	/** 
	 * 交易佣金。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $commission_fee;
	
	/** 
	 * 交易创建时间
	 **/
	public $created;
	
	/** 
	 * 交易成功时间(更新交易状态为成功的同时更新)/确认收货时间。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $end_time;
	
	/** 
	 * 快递代收款。精确到2位小数;单位:元。如:212.07，表示:212元7分
	 **/
	public $express_agency_fee;
	
	/** 
	 * 子订单的帐务金额详情列表
	 **/
	public $order_amounts;
	
	/** 
	 * 付款时间。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $pay_time;
	
	/** 
	 * 主订单实付金额。精确到2位小数;单位:元。如:200.07，表示:200元7分，计算公式如下：如果主订单只有一笔子订单 payment = 子订单的实付金额 + 货到付款服务费(如果是货到付款订单) - 主订单的系统级优惠；如果主订单有多笔子订单 payment = 各子订单的实付金额之和 + 货到付款服务费(如果是货到付款订单) + 邮费 - 主订单的系统级优惠
	 **/
	public $payment;
	
	/** 
	 * 邮费。精确到2位小数;单位:元。如:200.07，表示:200元7分。目前只提供整笔交易的邮费，暂不提供各子订单的邮费
	 **/
	public $post_fee;
	
	/** 
	 * 主交易订单的系统级优惠详情
	 **/
	public $promotion_details;
	
	/** 
	 * 卖家货到付款服务费。精确到2位小数;单位:元。如:12.07，表示:12元7分
	 **/
	public $seller_cod_fee;
	
	/** 
	 * 交易主订单编号
	 **/
	public $tid;
	
	/** 
	 * 主订单的商品金额（各子订单中商品price * num的和，不包括任何优惠信息）。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $total_fee;	
}
?>