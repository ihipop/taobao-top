<?php

/**
 * 地址可达性反馈数据对象
 * @author auto create
 */
class AddressReachableFeedbackTopRequest
{
	
	/** 
	 * 收货地址，请填写详细的收货地址，包括省、市、区、街道或镇
	 **/
	public $address;
	
	/** 
	 * 物流商编码code
	 **/
	public $cp_code;
	
	/** 
	 * 物流商ID
	 **/
	public $cp_id;
	
	/** 
	 * 地址是否可达：0-不可达；1-可达
	 **/
	public $reachable;
	
	/** 
	 * 商家ID，淘宝卖家sellerId
	 **/
	public $seller_id;
	
	/** 
	 * 商家昵称
	 **/
	public $seller_nick_name;	
}
?>