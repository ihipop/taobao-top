<?php

/**
 * 类目、品牌下的达尔文元数据
 * @author auto create
 */
class BrandCatMetaData
{
	
	/** 
	 * 品牌id
	 **/
	public $brand_id;
	
	/** 
	 * 叶子类目id
	 **/
	public $cat_id;
	
	/** 
	 * 以;隔开多个认证资料。:隔开资料ID与内容。如？1:产品包装图片;2:完整产品资质
	 **/
	public $certified_data;
	
	/** 
	 * 类目、品牌是否切入达尔文
	 **/
	public $is_darwin;	
}
?>