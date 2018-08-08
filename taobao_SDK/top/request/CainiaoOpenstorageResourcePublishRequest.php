<?php
/**
 * TOP API: cainiao.openstorage.resource.publish request
 * 
 * @author auto create
 * @since 1.0, 2016.08.10
 */
class CainiaoOpenstorageResourcePublishRequest
{
	/** 
	 * 资源发布参数
	 **/
	private $paramPublishResourceRequest;
	
	private $apiParas = array();
	
	public function setParamPublishResourceRequest($paramPublishResourceRequest)
	{
		$this->paramPublishResourceRequest = $paramPublishResourceRequest;
		$this->apiParas["param_publish_resource_request"] = $paramPublishResourceRequest;
	}

	public function getParamPublishResourceRequest()
	{
		return $this->paramPublishResourceRequest;
	}

	public function getApiMethodName()
	{
		return "cainiao.openstorage.resource.publish";
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
