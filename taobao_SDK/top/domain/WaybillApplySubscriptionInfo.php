<?php

/**
 * 商家与CP的订购关系
 * @author auto create
 */
class WaybillApplySubscriptionInfo
{
	
	/** 
	 * CP网点信息及对应的商家的发货信息
	 **/
	public $branch_account_cols;
	
	/** 
	 * 物流服务商ID
	 **/
	public $cp_code;
	
	/** 
	 * 1是直营，2是加盟
	 **/
	public $cp_type;
	
	/** 
	 * 订购关系是否建立
	 **/
	public $result;	
}
?>