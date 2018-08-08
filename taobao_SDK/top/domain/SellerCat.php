<?php

/**
 * 店铺内卖家自定义类目
 * @author auto create
 */
class SellerCat
{
	
	/** 
	 * 卖家自定义类目编号
	 **/
	public $cid;
	
	/** 
	 * 创建时间。格式：yyyy-MM-dd HH:mm:ss
	 **/
	public $created;
	
	/** 
	 * 修改时间。格式：yyyy-MM-dd HH:mm:ss
	 **/
	public $modified;
	
	/** 
	 * 卖家自定义类目名称
	 **/
	public $name;
	
	/** 
	 * 父类目编号，值等于0：表示此类目为店铺下的一级类目，值不等于0：表示此类目有父类目
	 **/
	public $parent_cid;
	
	/** 
	 * 链接图片地址
	 **/
	public $pic_url;
	
	/** 
	 * 该类目在页面上的排序位置
	 **/
	public $sort_order;
	
	/** 
	 * 店铺类目类型：可选值：manual_type：手动分类，new_type：新品上价， tree_type：二三级类目树 ，property_type：属性叶子类目树， brand_type：品牌推广
	 **/
	public $type;	
}
?>