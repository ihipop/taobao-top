<?php
/**
 * TOP API: cainiao.openstorage.resource.update request
 * 
 * @author auto create
 * @since 1.0, 2016.08.10
 */
class CainiaoOpenstorageResourceUpdateRequest
{
	/** 
	 * 入参
	 **/
	private $paramUpdateResourceRequest;
	
	private $apiParas = array();
	
	public function setParamUpdateResourceRequest($paramUpdateResourceRequest)
	{
		$this->paramUpdateResourceRequest = $paramUpdateResourceRequest;
		$this->apiParas["param_update_resource_request"] = $paramUpdateResourceRequest;
	}

	public function getParamUpdateResourceRequest()
	{
		return $this->paramUpdateResourceRequest;
	}

	public function getApiMethodName()
	{
		return "cainiao.openstorage.resource.update";
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
