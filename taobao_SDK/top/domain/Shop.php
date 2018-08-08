<?php

/**
 * 店铺信息
 * @author auto create
 */
class Shop
{
	
	/** 
	 * 总橱窗数量，对于C卖家返回总橱窗数，对于B卖家返回0（只有taobao.shop.remainshowcase.get可以返回）
	 **/
	public $all_count;
	
	/** 
	 * 店铺公告
	 **/
	public $bulletin;
	
	/** 
	 * 店铺所属的类目编号
	 **/
	public $cid;
	
	/** 
	 * 开店时间。格式：yyyy-MM-dd HH:mm:ss
	 **/
	public $created;
	
	/** 
	 * 店铺描述
	 **/
	public $desc;
	
	/** 
	 * 最后修改时间。格式：yyyy-MM-dd HH:mm:ss
	 **/
	public $modified;
	
	/** 
	 * 卖家昵称
	 **/
	public $nick;
	
	/** 
	 * 店标地址。返回相对路径，可以用"http://logo.taobao.com/shop-logo"来拼接成绝对路径
	 **/
	public $pic_path;
	
	/** 
	 * 剩余橱窗数量，对于C卖家返回剩余橱窗数，对于B卖家返回-1（只有taobao.shop.remainshowcase.get可以返回）
	 **/
	public $remain_count;
	
	/** 
	 * 店铺动态评分信息
	 **/
	public $shop_score;
	
	/** 
	 * 店铺编号
	 **/
	public $sid;
	
	/** 
	 * 店铺标题
	 **/
	public $title;
	
	/** 
	 * 已用的橱窗数量，对于C卖家返回已使用的橱窗数，对于B卖家返回-1（只有taobao.shop.remainshowcase.get可以返回）
	 **/
	public $used_count;	
}
?>