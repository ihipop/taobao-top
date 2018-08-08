<?php

/**
 * 损益信息
 * @author auto create
 */
class CainiaoInventoryProfitlossProfitlossinfo
{
	
	/** 
	 * 仓库订单编码
	 **/
	public $cn_order_code;
	
	/** 
	 * 单据生成时间
	 **/
	public $created_time;
	
	/** 
	 * 商品信息列表
	 **/
	public $order_item_list;
	
	/** 
	 * 订单类型： 701 盘点出库 702 盘点入库
	 **/
	public $order_type;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * 仓库编码
	 **/
	public $store_code;	
}
?>