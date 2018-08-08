<?php

/**
 * SN信息
 * @author auto create
 */
class Sninfo
{
	
	/** 
	 * 库存类型（1 可销售库存(正品) 101 残次 102 机损 103 箱损201 冻结库存）
	 **/
	public $inventory_type;
	
	/** 
	 * 商家对商品的编码
	 **/
	public $item_code;
	
	/** 
	 * 商品ID
	 **/
	public $item_id;
	
	/** 
	 * sn编码
	 **/
	public $sn_code;	
}
?>