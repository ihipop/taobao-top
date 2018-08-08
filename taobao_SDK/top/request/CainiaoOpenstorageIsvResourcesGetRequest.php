<?php
/**
 * TOP API: cainiao.openstorage.isv.resources.get request
 * 
 * @author auto create
 * @since 1.0, 2016.08.10
 */
class CainiaoOpenstorageIsvResourcesGetRequest
{
	/** 
	 * isv资源类型，分为：TEMPLATE（模板）和PRINT_ITEM（打印项）
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
		return "cainiao.openstorage.isv.resources.get";
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
