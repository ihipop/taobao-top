<?php

/**
 * 库存明细
 * @author auto create
 */
class IpcInventoryDetailDo
{
	
	/** 
	 * 主订单号
	 **/
	public $biz_order_id;
	
	/** 
	 * 子订单号
	 **/
	public $biz_sub_order_id;
	
	/** 
	 * 1拍减 2付减
	 **/
	public $flag;
	
	/** 
	 * 占用数量
	 **/
	public $occupy_quantity;
	
	/** 
	 * 货主昵称
	 **/
	public $owner_nick;
	
	/** 
	 * 预扣库存数
	 **/
	public $reserve_quantity;
	
	/** 
	 * 仓储商品id
	 **/
	public $sc_item_id;
	
	/** 
	 * 仓库编码
	 **/
	public $store_code;	
}
?>