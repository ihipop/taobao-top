<?php

/**
 * 商品价格更新时候的可选参数
 * @author auto create
 */
class UpdateItemPriceOption
{
	
	/** 
	 * 目标币种，非必填，仅支持天猫国际官网同购商家将外币价格修改成人民币价格时使用
	 **/
	public $currency_type;
	
	/** 
	 * 是否忽略涉嫌炒信警告信息
	 **/
	public $ignore_fake_credit;	
}
?>