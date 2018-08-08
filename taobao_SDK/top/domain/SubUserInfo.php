<?php

/**
 * 子账号基本信息
 * @author auto create
 */
class SubUserInfo
{
	
	/** 
	 * 子账号姓名
	 **/
	public $full_name;
	
	/** 
	 * 是否参与分流 1不参与 2参与
	 **/
	public $is_online;
	
	/** 
	 * 子账号用户名
	 **/
	public $nick;
	
	/** 
	 * 子账号所属的主账号的唯一标识
	 **/
	public $seller_id;
	
	/** 
	 * 主账号昵称
	 **/
	public $seller_nick;
	
	/** 
	 * 子账号当前状态 1正常 -1删除  2冻结
	 **/
	public $status;
	
	/** 
	 * 子账号Id
	 **/
	public $sub_id;	
}
?>