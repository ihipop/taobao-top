<?php

/**
 * 商品SKU更新OuterId时候用的数据
 * @author auto create
 */
class UpdateSkuOuterId
{
	
	/** 
	 * 被更新的Sku的商家外部id
	 **/
	public $outer_id;
	
	/** 
	 * Sku属性串。格式:pid:vid;pid:vid,如: 1627207:3232483;1630696:3284570,表示机身颜色:军绿色;手机套餐:一电一充；如果填写将以属性对形式查找被更新SKU
	 **/
	public $properties;
	
	/** 
	 * SkuID，如果填写，将以SKUID查找被更新的SKU
	 **/
	public $sku_id;	
}
?>