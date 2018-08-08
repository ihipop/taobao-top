<?php

/**
 * 单品级优惠信息
 * @author auto create
 */
class PromotionInItem
{
	
	/** 
	 * 优惠描述
	 **/
	public $desc;
	
	/** 
	 * 优惠结束时间
	 **/
	public $end_time;
	
	/** 
	 * 优惠折后价格
	 **/
	public $item_promo_price;
	
	/** 
	 * 优惠展示名称
	 **/
	public $name;
	
	/** 
	 * 需要支付附加物，显示为+xxx。如：+20淘金币
	 **/
	public $other_need;
	
	/** 
	 * 赠送东西。如：送10商城积分
	 **/
	public $other_send;
	
	/** 
	 * idValue的值
	 **/
	public $promotion_id;
	
	/** 
	 * sku价格对应的id（保证二者顺序相同）
	 **/
	public $sku_id_list;
	
	/** 
	 * sku价格列表
	 **/
	public $sku_price_list;
	
	/** 
	 * 优惠开始时间
	 **/
	public $start_time;	
}
?>