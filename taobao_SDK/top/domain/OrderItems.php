<?php

/**
 * 订单商品信息列表
 * @author auto create
 */
class OrderItems
{
	
	/** 
	 * 商品金额 123.33元，单位：分
	 **/
	public $item_amount;
	
	/** 
	 * 前端商家编码
	 **/
	public $item_code;
	
	/** 
	 * 前端宝贝itemId
	 **/
	public $item_id;
	
	/** 
	 * 数量
	 **/
	public $item_quantity;
	
	/** 
	 * 默认：0；促销赠品1001
	 **/
	public $item_tag;
	
	/** 
	 * 明细ID
	 **/
	public $order_item_id;
	
	/** 
	 * 后端商家编码
	 **/
	public $sc_item_code;
	
	/** 
	 * 货品id
	 **/
	public $sc_item_id;
	
	/** 
	 * 前端skuId
	 **/
	public $sku_id;
	
	/** 
	 * 明细对应主单的交易单号
	 **/
	public $trade_id;
	
	/** 
	 * 明细对应的子交易单号
	 **/
	public $trade_item_id;	
}
?>