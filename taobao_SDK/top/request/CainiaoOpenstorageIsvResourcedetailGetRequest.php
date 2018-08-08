<?php
/**
 * TOP API: cainiao.openstorage.isv.resourcedetail.get request
 * 
 * @author auto create
 * @since 1.0, 2016.08.25
 */
class CainiaoOpenstorageIsvResourcedetailGetRequest
{
	/** 
	 * isv资源id
	 **/
	private $isvResourceId;
	
	private $apiParas = array();
	
	public function setIsvResourceId($isvResourceId)
	{
		$this->isvResourceId = $isvResourceId;
		$this->apiParas["isv_resource_id"] = $isvResourceId;
	}

	public function getIsvResourceId()
	{
		return $this->isvResourceId;
	}

	public function getApiMethodName()
	{
		return "cainiao.openstorage.isv.resourcedetail.get";
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
