<?php

/**
 * 天猫商品尺码表模板
 * @author auto create
 */
class SizeMappingTemplate
{
	
	/** 
	 * 尺码表模板内容，格式为"尺码值:维度名称:数值,尺码值:维度名称:数值"。其中，数值的单位，长度单位为厘米（cm），体重单位为公斤（kg）。
	 **/
	public $template_content;
	
	/** 
	 * 尺码表模板ID
	 **/
	public $template_id;
	
	/** 
	 * 尺码表模板名称
	 **/
	public $template_name;	
}
?>