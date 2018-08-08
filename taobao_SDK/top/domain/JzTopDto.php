<?php

/**
 * 家装返回的数据信息
 * @author auto create
 */
class JzTopDto
{
	
	/** 
	 * 快递公司列表
	 **/
	public $expresses;
	
	/** 
	 * 商品对应的服务信息
	 **/
	public $goods_relations;
	
	/** 
	 * 安装公司列表
	 **/
	public $ins_tps;
	
	/** 
	 * 物流公司列表
	 **/
	public $lg_cps;
	
	/** 
	 * 是否支持修改安装地址
	 **/
	public $supp_modify_ins_add;
	
	/** 
	 * 是否支持快递
	 **/
	public $support_delivery;
	
	/** 
	 * 是否支持安装
	 **/
	public $support_install;	
}
?>