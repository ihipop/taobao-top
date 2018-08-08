<?php

/**
 * 图片分类
 * @author auto create
 */
class PictureCategory
{
	
	/** 
	 * 图片类目的创建时间
	 **/
	public $created;
	
	/** 
	 * 图片分类的修改时间
	 **/
	public $modified;
	
	/** 
	 * 一级分类的parent_id为0
二级分类的则为其父分类的picture_category_id
	 **/
	public $parent_id;
	
	/** 
	 * 图片分类ID
	 **/
	public $picture_category_id;
	
	/** 
	 * 图片分类名
	 **/
	public $picture_category_name;
	
	/** 
	 * 图片分类排序
	 **/
	public $position;
	
	/** 
	 * 分类下的图片数
	 **/
	public $total;
	
	/** 
	 * 图片分类型别，sys-fixture代表店铺装修分类(系统分类)，sys-auction代表宝贝图片分类(系统分类)，user-define代表用户自定义分类
	 **/
	public $type;	
}
?>