<?php

/**
 * 更新SKU价格时候的SKU价格对象；如果没有SKU或者不更新SKU价格，可以不填;查找SKU目前支持ID，属性串和商家编码三种模式，建议选用一种最合适的，切勿滥用，一次调用中如果混合使用，更新结果不可预期！
 * @author auto create
 */
class UpdateSkuPrice
{
	
	/** 
	 * Sku的商家外部id，用于指定被修改价格的SKU
	 **/
	public $outer_id;
	
	/** 
	 * 属于这个sku的商品的价格 取值范围:0-100000000;精确到2位小数;单位:元。如:200.07，表示:200元7分。
	 **/
	public $price;
	
	/** 
	 * Sku属性串。格式:pid:vid;pid:vid,如: 1627207:3232483;1630696:3284570,表示机身颜色:军绿色;手机套餐:一电一充，用于指定被修改价格的SKU
	 **/
	public $properties;
	
	/** 
	 * SkuID，用于指定被修改价格的SKU
	 **/
	public $sku_id;	
}
?>