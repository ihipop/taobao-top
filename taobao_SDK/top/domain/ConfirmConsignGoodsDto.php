<?php

/**
 * 发货的包裹
 * @author auto create
 */
class ConfirmConsignGoodsDto
{
	
	/** 
	 * 待发货商品的前端宝贝id
	 **/
	public $item_id;
	
	/** 
	 * 待发货商品的数量
	 **/
	public $quantity;
	
	/** 
	 * 待发货商品的子交易号
	 **/
	public $tc_sub_trade_id;	
}
?>