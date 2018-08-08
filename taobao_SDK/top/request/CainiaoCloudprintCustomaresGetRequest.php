<?php
/**
 * TOP API: cainiao.cloudprint.customares.get request
 * 
 * @author auto create
 * @since 1.0, 2016.09.18
 */
class CainiaoCloudprintCustomaresGetRequest
{
	/** 
	 * 用户使用的标准模板id
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
		return "cainiao.cloudprint.customares.get";
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
