<?php

/**
 * 交易的优惠信息详情
 * @author auto create
 */
class PromotionDetail
{
	
	/** 
	 * 优惠金额（免运费、限时打折时为空）,单位：元
	 **/
	public $discount_fee;
	
	/** 
	 * 赠品的宝贝id
	 **/
	public $gift_item_id;
	
	/** 
	 * 满就送商品时，所送商品的名称
	 **/
	public $gift_item_name;
	
	/** 
	 * 满就送礼物的礼物数量
	 **/
	public $gift_item_num;
	
	/** 
	 * 交易的主订单或子订单号
	 **/
	public $id;
	
	/** 
	 * 优惠活动的描述
	 **/
	public $promotion_desc;
	
	/** 
	 * 优惠id，(由营销工具id、优惠活动id和优惠详情id组成，结构为：营销工具id-优惠活动id_优惠详情id，如mjs-123024_211143）
	 **/
	public $promotion_id;
	
	/** 
	 * 优惠信息的名称
	 **/
	public $promotion_name;	
}
?>