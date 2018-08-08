<?php

/**
 * 外部商品实体
 * @author auto create
 */
class OutEntityItem
{
	
	/** 
	 * entity_type对应的实体类型的id：
当entity_type为IC_ITEM时，entity_id为ic的商品id
	 **/
	public $entity_id;
	
	/** 
	 * 外部实体类型：
IC_ITEM--ic商品
IC_SKU--ic销售单元
	 **/
	public $entity_type;	
}
?>