<?php
/**
 * TOP API: cainiao.cloudprint.templates.migrate request
 * 
 * @author auto create
 * @since 1.0, 2016.10.14
 */
class CainiaoCloudprintTemplatesMigrateRequest
{
	/** 
	 * 自定义区内容
	 **/
	private $customAreaContent;
	
	/** 
	 * 自定义区名称
	 **/
	private $customAreaName;
	
	/** 
	 * 标准电子面单模板的id
	 **/
	private $tempalteId;
	
	private $apiParas = array();
	
	public function setCustomAreaContent($customAreaContent)
	{
		$this->customAreaContent = $customAreaContent;
		$this->apiParas["custom_area_content"] = $customAreaContent;
	}

	public function getCustomAreaContent()
	{
		return $this->customAreaContent;
	}

	public function setCustomAreaName($customAreaName)
	{
		$this->customAreaName = $customAreaName;
		$this->apiParas["custom_area_name"] = $customAreaName;
	}

	public function getCustomAreaName()
	{
		return $this->customAreaName;
	}

	public function setTempalteId($tempalteId)
	{
		$this->tempalteId = $tempalteId;
		$this->apiParas["tempalte_id"] = $tempalteId;
	}

	public function getTempalteId()
	{
		return $this->tempalteId;
	}

	public function getApiMethodName()
	{
		return "cainiao.cloudprint.templates.migrate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
