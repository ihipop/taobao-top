<?php
/**
 * TOP API: cainiao.cloudprint.isv.resources.get request
 * 
 * @author auto create
 * @since 1.0, 2017.01.19
 */
class CainiaoCloudprintIsvResourcesGetRequest
{
	/** 
	 * isv资源类型，分为：TEMPLATE（表示模板），PRINT_ITEM（打印项），CUSTOM_AREA（预设自定义区）
	 **/
	private $isvResourceType;
	
	private $apiParas = array();
	
	public function setIsvResourceType($isvResourceType)
	{
		$this->isvResourceType = $isvResourceType;
		$this->apiParas["isv_resource_type"] = $isvResourceType;
	}

	public function getIsvResourceType()
	{
		return $this->isvResourceType;
	}

	public function getApiMethodName()
	{
		return "cainiao.cloudprint.isv.resources.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->isvResourceType,"isvResourceType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
