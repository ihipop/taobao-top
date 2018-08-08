<?php
/**
 * TOP API: cainiao.cloudprint.customarea.update request
 * 
 * @author auto create
 * @since 1.0, 2016.09.19
 */
class CainiaoCloudprintCustomareaUpdateRequest
{
	/** 
	 * 自定义区内容（可修改）
	 **/
	private $customAreaContent;
	
	/** 
	 * 自定义区id（不可修改）
	 **/
	private $customAreaId;
	
	/** 
	 * 自定义区名称（可修改）
	 **/
	private $customAreaName;
	
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

	public function setCustomAreaId($customAreaId)
	{
		$this->customAreaId = $customAreaId;
		$this->apiParas["custom_area_id"] = $customAreaId;
	}

	public function getCustomAreaId()
	{
		return $this->customAreaId;
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

	public function getApiMethodName()
	{
		return "cainiao.cloudprint.customarea.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->customAreaContent,"customAreaContent");
		RequestCheckUtil::checkNotNull($this->customAreaId,"customAreaId");
		RequestCheckUtil::checkNotNull($this->customAreaName,"customAreaName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
