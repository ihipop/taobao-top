<?php

/**
 * 支持返回剩余橱窗数量，已用橱窗数量，总橱窗数量
 * @author auto create
 */
class RemainCountShop
{
	
	/** 
	 * 总橱窗数量，对于C卖家返回总橱窗数，对于B卖家返回0（只有taobao.shop.remainshowcase.get可以返回）
	 **/
	public $all_count;
	
	/** 
	 * 剩余橱窗数量，对于C卖家返回剩余橱窗数，对于B卖家返回-1（只有taobao.shop.remainshowcase.get可以返回）
	 **/
	public $remain_count;
	
	/** 
	 * 已用的橱窗数量，对于C卖家返回已使用的橱窗数，对于B卖家返回-1（只有taobao.shop.remainshowcase.get可以返回）
	 **/
	public $used_count;	
}
?>