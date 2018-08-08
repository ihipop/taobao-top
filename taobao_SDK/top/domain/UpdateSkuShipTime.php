<?php

/**
 * 被更新SKU的发货时间，后台会根据三个子属性去查找匹配的sku，如果找到就默认对sku进行更新，当无匹配sku且更新类型针对sku，会报错。
 * @author auto create
 */
class UpdateSkuShipTime
{
	
	/** 
	 * Sku的商家外部id；如：2015_07_23_D_123
	 **/
	public $outer_id;
	
	/** 
	 * Sku属性串。格式:pid:vid;pid:vid,如: 1627207:3232483;1630696:3284570,表示机身颜色:军绿色;手机套餐:一电一充
	 **/
	public $properties;
	
	/** 
	 * 被更新发货时间；格式和具体设置的发货时间格式相关。绝对发货时间填写yyyy-MM-dd;相对发货时间填写数字。
	 **/
	public $ship_time;
	
	/** 
	 * SKU的ID
	 **/
	public $sku_id;	
}
?>