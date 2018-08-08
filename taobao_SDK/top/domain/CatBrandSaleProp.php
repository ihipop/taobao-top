<?php

/**
 * 被管控的品牌和类目的所对应的销售属性
 * @author auto create
 */
class CatBrandSaleProp
{
	
	/** 
	 * 被管控的品牌的Id
	 **/
	public $brand_id;
	
	/** 
	 * 被管控的类目ID
	 **/
	public $cat_id;
	
	/** 
	 * 如果该属性为营销属性，则获取默认值
	 **/
	public $def_market_prop_value;
	
	/** 
	 * true表示：不是产品的规格属性
false表示：是产品的规格属性。
	 **/
	public $is_not_spec;
	
	/** 
	 * 被管控的销售属性ID
	 **/
	public $property_id;	
}
?>