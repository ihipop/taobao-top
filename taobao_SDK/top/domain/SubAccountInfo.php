<?php

/**
 * 子账号基本信息
 * @author auto create
 */
class SubAccountInfo
{
	
	/** 
	 * 子账号是否参与分流 true:参与分流 false:未参与分流
	 **/
	public $sub_dispatch_status;
	
	/** 
	 * 子账号Id
	 **/
	public $sub_id;
	
	/** 
	 * 子账号用户名
	 **/
	public $sub_nick;
	
	/** 
	 * 子账号是否已欠费 true:已欠费 false:未欠费
	 **/
	public $sub_owed_status;
	
	/** 
	 * 子账号当前状态：1正常，2卖家停用，3处罚冻结
	 **/
	public $sub_status;
	
	/** 
	 * 主账号Id
	 **/
	public $user_id;
	
	/** 
	 * 主账号用户名
	 **/
	public $user_nick;	
}
?>