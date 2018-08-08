<?php

/**
 * 店铺类目
 * @author auto create
 */
class ShopCat
{
	
	/** 
	 * 类目编号
	 **/
	public $cid;
	
	/** 
	 * 该类目是否为父类目。即：该类目是否还有子类目
	 **/
	public $is_parent;
	
	/** 
	 * 类目名称
	 **/
	public $name;
	
	/** 
	 * 父类目编号，注：此类目指前台类目，值等于0：表示此类目为一级类目，值不等于0：表示此类目有父类目
	 **/
	public $parent_cid;	
}
?>