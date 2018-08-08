<?php

/**
 * 通知消息主体
 * @author auto create
 */
class BmsConsignOrderConfirm
{
	
	/** 
	 * 每次发货均重新生成
	 **/
	public $consign_code;
	
	/** 
	 * 仓库出库时间
	 **/
	public $consign_time;
	
	/** 
	 * out_biz_id，（非导入时为订单创建时的交易号）
	 **/
	public $erp_order_code;
	
	/** 
	 * 交易订单金额，以分为单位
	 **/
	public $order_amount;
	
	/** 
	 * BMS订单编码
	 **/
	public $order_code;
	
	/** 
	 * 订单商品信息列表
	 **/
	public $order_items;
	
	/** 
	 * 邮费，以分为单位
	 **/
	public $order_post_fee;
	
	/** 
	 * 0销售平台、1手工录入、2导入发货、3ERP推送
	 **/
	public $order_soruce;
	
	/** 
	 * 操作子类型(201 一般交易出库单,502 换货出库单,503 补发出库单)
	 **/
	public $order_type;
	
	/** 
	 * 货主id
	 **/
	public $owner_user_id;
	
	/** 
	 * 店铺id，主店铺时跟货主id相同
	 **/
	public $shop_id;
	
	/** 
	 * 发货仓的仓库编码
	 **/
	public $store_code;
	
	/** 
	 * 仓库作业单号，LBX号
	 **/
	public $store_order_code;
	
	/** 
	 * 运单信息列表
	 **/
	public $tms_orders;	
}
?>