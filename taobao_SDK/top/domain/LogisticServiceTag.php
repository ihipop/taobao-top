<?php

/**
 * 物流服务标签
 * @author auto create
 */
class LogisticServiceTag
{
	
	/** 
	 * 物流服务下的标签属性,多个标签之间有";"分隔
	 **/
	public $service_tag;
	
	/** 
	 * 消费者选快递请直接判断service_tag是否包含companyCode。而不要判断service_type
	 **/
	public $service_type;	
}
?>