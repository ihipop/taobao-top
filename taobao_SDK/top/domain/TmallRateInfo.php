<?php

/**
 * 评价信息包括标签信息
 * @author auto create
 */
class TmallRateInfo
{
	
	/** 
	 * 追加评价内容
	 **/
	public $append_content;
	
	/** 
	 * 追评中是否含有负向标签
	 **/
	public $append_has_negtv;
	
	/** 
	 * 追加评价中带有的语义标签列表
	 **/
	public $append_tags;
	
	/** 
	 * 追加评价时间
	 **/
	public $append_time;
	
	/** 
	 * 评价时间
	 **/
	public $comment_time;
	
	/** 
	 * 评价内容
	 **/
	public $content;
	
	/** 
	 * 原始评价是否含有负向标签
	 **/
	public $has_negtv;
	
	/** 
	 * 原始评价对应的标签列表
	 **/
	public $tags;
	
	/** 
	 * 表示评价者的昵称
	 **/
	public $user_nick;	
}
?>