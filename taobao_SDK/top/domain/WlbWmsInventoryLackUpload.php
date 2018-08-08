<?php

/**
 * 缺货通知信息
 * @author auto create
 */
class WlbWmsInventoryLackUpload
{
	
	/** 
	 * 创建时间
	 **/
	public $create_time;
	
	/** 
	 * 商品信息列表
	 **/
	public $item_list;
	
	/** 
	 * 订单编码
	 **/
	public $order_code;
	
	/** 
	 * 外部业务编码;消息ID，用于去重
	 **/
	public $out_biz_code;
	
	/** 
	 * 仓库编码
	 **/
	public $store_code;
	
	/** 
	 * 仓储订单编码
	 **/
	public $store_order_code;
	
	/** 
	 * 仓库编码
	 **/
	public $strore_code;	
}
?>