<?php
/**
 * TOP API: tmall.item.sizemapping.template.update request
 * 
 * @author auto create
 * @since 1.0, 2016.02.23
 */
class TmallItemSizemappingTemplateUpdateRequest
{
	/** 
	 * 尺码表模板内容，格式为"尺码值:维度名称:数值,尺码值:维度名称:数值"。其中，数值的单位，长度单位为厘米（cm），体重单位为公斤（kg）。尺码值，维度数据不能包含数字，特殊字符。数值为0-999.9的数字，且最多一位小数。
	 **/
	private $templateContent;
	
	/** 
	 * 尺码表模板ID
	 **/
	private $templateId;
	
	/** 
	 * 尺码表模板名称
	 **/
	private $templateName;
	
	private $apiParas = array();
	
	public function setTemplateContent($templateContent)
	{
		$this->templateContent = $templateContent;
		$this->apiParas["template_content"] = $templateContent;
	}

	public function getTemplateContent()
	{
		return $this->templateContent;
	}

	public function setTemplateId($templateId)
	{
		$this->templateId = $templateId;
		$this->apiParas["template_id"] = $templateId;
	}

	public function getTemplateId()
	{
		return $this->templateId;
	}

	public function setTemplateName($templateName)
	{
		$this->templateName = $templateName;
		$this->apiParas["template_name"] = $templateName;
	}

	public function getTemplateName()
	{
		return $this->templateName;
	}

	public function getApiMethodName()
	{
		return "tmall.item.sizemapping.template.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->templateContent,"templateContent");
		RequestCheckUtil::checkMaxLength($this->templateContent,8000,"templateContent");
		RequestCheckUtil::checkNotNull($this->templateId,"templateId");
		RequestCheckUtil::checkNotNull($this->templateName,"templateName");
		RequestCheckUtil::checkMaxLength($this->templateName,20,"templateName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
