<?php

/**
 * WlbWmsUnknownPackageUpload
 * @author auto create
 */
class WlbWmsUnknownPackageUpload
{
	
	/** 
	 * 创建时间
	 **/
	public $create_time;
	
	/** 
	 * 发货的运单号
	 **/
	public $mail_no;
	
	/** 
	 * 包裹对应的原ERP订单号
	 **/
	public $order_code;
	
	/** 
	 * 消息唯一标识
	 **/
	public $package_id;
	
	/** 
	 * 包裹商品列表
	 **/
	public $package_item_list;
	
	/** 
	 * 收到包裹仓库的仓库编码
	 **/
	public $store_code;
	
	/** 
	 * 包裹对应的原仓库作业订单
	 **/
	public $store_order_code;
	
	/** 
	 * 发货的配送公司
	 **/
	public $tms_code;	
}
?>