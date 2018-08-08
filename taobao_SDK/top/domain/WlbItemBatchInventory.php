<?php

/**
 * 商品的库存信息和批次信息
 * @author auto create
 */
class WlbItemBatchInventory
{
	
	/** 
	 * 批次库存查询结果
	 **/
	public $item_batch;
	
	/** 
	 * 商品ID
	 **/
	public $item_id;
	
	/** 
	 * 商品库存查询结果
	 **/
	public $item_inventorys;
	
	/** 
	 * 商品在所有仓库的可销库存总数
	 **/
	public $total_quantity;	
}
?>