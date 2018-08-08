<?php

/**
 * 使用数据推送的用户信息
 * @author auto create
 */
class JdpUser
{
	
	/** 
	 * 和数据回流绑定的appkey，用户的数据推到此appkey对应的rds后，会回传X_DOWNLOADED消息
	 **/
	public $hl_appkey;
	
	/** 
	 * 用户等级，用于区分大卖家，值越大则订单量越大
	 **/
	public $level;
	
	/** 
	 * rds的id，平台appkey会返回rds_id而不是rds_name
	 **/
	public $rds_id;
	
	/** 
	 * rds数据库的实例名
	 **/
	public $rds_name;
	
	/** 
	 * 卖家类型，B表示商城卖家，C表示淘宝卖家
	 **/
	public $seller_type;
	
	/** 
	 * 0:暂停1：正常2：sessoin失效，停止3：已删除
	 **/
	public $status;
	
	/** 
	 * 用户id
	 **/
	public $user_id;
	
	/** 
	 * 用户昵称
	 **/
	public $user_nick;	
}
?>