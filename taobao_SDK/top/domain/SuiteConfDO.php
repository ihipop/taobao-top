<?php

/**
 * 套装配置
 * @author auto create
 */
class SuiteConfDO
{
	
	/** 
	 * 如果有值，套装子规格形如：A*n,B*n,C*n....，n只能是inputs中的
	 **/
	public $inputs;
	
	/** 
	 * 套装，子规格限制数，当前一级类目，最多允许选择多少个产品规格，为空表示无限制。套装子规格形如:A*n,B*n,C*n....,max_size就是C的最大个数
	 **/
	public $max_size;
	
	/** 
	 * 套装，子规格数量总和限制，当前一级类目，所以子产品规格的数量不能超过这个值，为空表示无限制,套装子规格形如：A*n,B*n,C*n....,max_total_number就是所有n和的最大限制
	 **/
	public $max_total_number;
	
	/** 
	 * 一级类目ID，标识在该一级在类目下能布套装
	 **/
	public $root_cat_id;
	
	/** 
	 * 套装类目ID，当前一级类目，如果发布跨叶子类目的的套装，默认放到那个类目。如果没有值表示root_cat_id类目下发布的套装产品，不支持跨类目
	 **/
	public $suite_cat_id;	
}
?>