<?php

/**
 * 应用订购信息
 * @author auto create
 */
class ArticleSub
{
	
	/** 
	 * 应用收费代码，从合作伙伴后台（my.open.taobao.com）-收费管理-收费项目列表 能够获得该应用的收费代码
	 **/
	public $article_code;
	
	/** 
	 * 应用名称
	 **/
	public $article_name;
	
	/** 
	 * 是否自动续费
	 **/
	public $autosub;
	
	/** 
	 * 订购关系到期时间
	 **/
	public $deadline;
	
	/** 
	 * 是否到期提醒
	 **/
	public $expire_notice;
	
	/** 
	 * 收费项目代码，从合作伙伴后台（my.open.taobao.com）-收费管理-收费项目列表 能够获得收费项目代码
	 **/
	public $item_code;
	
	/** 
	 * 收费项目名称
	 **/
	public $item_name;
	
	/** 
	 * 淘宝会员名
	 **/
	public $nick;
	
	/** 
	 * 状态，1=有效 2=过期
	 **/
	public $status;	
}
?>