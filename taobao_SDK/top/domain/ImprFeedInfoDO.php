<?php

/**
 * 大家印象标签对应评价信息对象
 * @author auto create
 */
class ImprFeedInfoDO
{
	
	/** 
	 * 1:主评  2:追评
	 **/
	public $biz_type;
	
	/** 
	 * 评价内容
	 **/
	public $feedback;
	
	/** 
	 * 评价创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 评价的修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 从评价内容里提取的语义标签
	 **/
	public $impr_words;	
}
?>