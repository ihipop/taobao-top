<?php

/**
 * 应用订单信息
 * @author auto create
 */
class ArticleBizOrder
{
	
	/** 
	 * activityCode
	 **/
	public $activity_code;
	
	/** 
	 * 应用收费代码，从合作伙伴后台（my.open.taobao.com）-收费管理-收费项目列表 能够获得该应用的收费代码
	 **/
	public $article_code;
	
	/** 
	 * 商品模型名称
	 **/
	public $article_item_name;
	
	/** 
	 * 应用名称
	 **/
	public $article_name;
	
	/** 
	 * 订单号
	 **/
	public $biz_order_id;
	
	/** 
	 * 订单类型，1=新订 2=续订 3=升级 4=后台赠送 5=后台自动续订 6=订单审核后生成订购关系（暂时用不到）
	 **/
	public $biz_type;
	
	/** 
	 * 订单创建时间（订购时间）
	 **/
	public $create;
	
	/** 
	 * 原价（单位为分）
	 **/
	public $fee;
	
	/** 
	 * 收费项目代码，从合作伙伴后台（my.open.taobao.com）-收费管理-收费项目列表 能够获得收费项目代码
	 **/
	public $item_code;
	
	/** 
	 * 收费项目名称
	 **/
	public $item_name;
	
	/** 
	 * 淘宝会员名
	 **/
	public $nick;
	
	/** 
	 * 订购周期  1表示年 ，2表示月，3表示天。
	 **/
	public $order_cycle;
	
	/** 
	 * 订购周期结束时间
	 **/
	public $order_cycle_end;
	
	/** 
	 * 订购周期开始时间
	 **/
	public $order_cycle_start;
	
	/** 
	 * 子订单号
	 **/
	public $order_id;
	
	/** 
	 * 优惠（单位为分）
	 **/
	public $prom_fee;
	
	/** 
	 * 退款（单位为分；升级时，系统会将升级前老版本按照剩余订购天数退还剩余金额）
	 **/
	public $refund_fee;
	
	/** 
	 * 实付（单位为分）
	 **/
	public $total_pay_fee;	
}
?>