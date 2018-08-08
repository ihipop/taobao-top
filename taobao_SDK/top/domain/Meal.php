<?php

/**
 * 搭配套餐类。
 * @author auto create
 */
class Meal
{
	
	/** 
	 * 搭配套餐商品列表。item_id为商品的id;item_show_name为商品显示名。因最多允许5个商品进行搭配，所以查询最多有5个，以json格式传出。
	 **/
	public $item_list;
	
	/** 
	 * 套餐id。
	 **/
	public $meal_id;
	
	/** 
	 * 搭配套餐描述！
	 **/
	public $meal_memo;
	
	/** 
	 * 搭配套餐名称。
	 **/
	public $meal_name;
	
	/** 
	 * 套餐一口价(单位是：分)
	 **/
	public $meal_price;
	
	/** 
	 * 普通运费模板id。若这个字段为空或0时，运费是卖家负责;若这个字段不为空，说明运费模板存在，运费是买家负责。
	 **/
	public $postage_id;
	
	/** 
	 * 套餐状态。有效：VALID;失效：INVALID(有效套餐为可使用的套餐,无效套餐为套餐中有商品下架或库存为0时)。
	 **/
	public $status;
	
	/** 
	 * 运费模板类型。卖家标识'SELL';买家标识'BUY'。若为'SELL'则字段postage_id为空。若为'BUY'，则postage_id为运费模板id，必有值。
	 **/
	public $type_postage;	
}
?>