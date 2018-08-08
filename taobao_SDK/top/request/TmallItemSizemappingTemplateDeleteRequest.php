<?php
/**
 * TOP API: tmall.item.sizemapping.template.delete request
 * 
 * @author auto create
 * @since 1.0, 2016.02.23
 */
class TmallItemSizemappingTemplateDeleteRequest
{
	/** 
	 * 尺码表模板ID
	 **/
	private $templateId;
	
	private $apiParas = array();
	
	public function setTemplateId($templateId)
	{
		$this->templateId = $templateId;
		$this->apiParas["template_id"] = $templateId;
	}

	public function getTemplateId()
	{
		return $this->templateId;
	}

	public function getApiMethodName()
	{
		return "tmall.item.sizemapping.template.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->templateId,"templateId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
