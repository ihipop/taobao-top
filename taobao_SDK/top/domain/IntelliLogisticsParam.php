<?php

/**
 * 批量智选物流请求参数
 * @author auto create
 */
class IntelliLogisticsParam
{
	
	/** 
	 * 发货地城市名称
	 **/
	public $from_city;
	
	/** 
	 * 发货地的详细地址
	 **/
	public $from_detail_address;
	
	/** 
	 * 发货地的区名称
	 **/
	public $from_district;
	
	/** 
	 * 发货地省份名称
	 **/
	public $from_prov;
	
	/** 
	 * 淘宝交易订单id（为了更好效果，推荐填写）
	 **/
	public $order_id;
	
	/** 
	 * 商家id(主账号id)
	 **/
	public $seller_id;
	
	/** 
	 * 到货地城市名称
	 **/
	public $to_city;
	
	/** 
	 * 到货地的详细地址
	 **/
	public $to_detail_address;
	
	/** 
	 * 到货地址的区名称
	 **/
	public $to_district;
	
	/** 
	 * 到货地省份名称
	 **/
	public $to_prov;	
}
?>