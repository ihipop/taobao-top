<?php

/**
 * 服务平台评价流水对象
 * @author auto create
 */
class ScoreResult
{
	
	/** 
	 * 服务态度评分
	 **/
	public $attitude_score;
	
	/** 
	 * 平均分
	 **/
	public $avg_score;
	
	/** 
	 * 易用性评分
	 **/
	public $easyuse_score;
	
	/** 
	 * 评价时间
	 **/
	public $gmt_create;
	
	/** 
	 * 评价id
	 **/
	public $id;
	
	/** 
	 * 是否实际付费 1-实际付费 2-实际未付费
	 **/
	public $is_pay;
	
	/** 
	 * 是否为有效评分 1-有效评分 2-无效评分
	 **/
	public $is_valid;
	
	/** 
	 * 服务规格code
	 **/
	public $item_code;
	
	/** 
	 * 服务规格名称
	 **/
	public $item_name;
	
	/** 
	 * 描述相符
	 **/
	public $matched_score;
	
	/** 
	 * 专业性评分
	 **/
	public $prof_score;
	
	/** 
	 * 交片速度
	 **/
	public $rapid_score;
	
	/** 
	 * 服务code
	 **/
	public $service_code;
	
	/** 
	 * 稳定性评分
	 **/
	public $stability_score;
	
	/** 
	 * 评论内容
	 **/
	public $suggestion;
	
	/** 
	 * 评价人用户昵称
	 **/
	public $user_nick;	
}
?>