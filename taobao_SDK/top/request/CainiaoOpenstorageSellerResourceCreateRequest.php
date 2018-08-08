<?php
/**
 * TOP API: cainiao.openstorage.seller.resource.create request
 * 
 * @author auto create
 * @since 1.0, 2016.08.10
 */
class CainiaoOpenstorageSellerResourceCreateRequest
{
	/** 
	 * 商家创建资源参数
	 **/
	private $paramCreateSellerResourceRequest;
	
	private $apiParas = array();
	
	public function setParamCreateSellerResourceRequest($paramCreateSellerResourceRequest)
	{
		$this->paramCreateSellerResourceRequest = $paramCreateSellerResourceRequest;
		$this->apiParas["param_create_seller_resource_request"] = $paramCreateSellerResourceRequest;
	}

	public function getParamCreateSellerResourceRequest()
	{
		return $this->paramCreateSellerResourceRequest;
	}

	public function getApiMethodName()
	{
		return "cainiao.openstorage.seller.resource.create";
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
