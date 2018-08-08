<?php
/**
 * TOP API: cainiao.openstorage.seller.resourcedetail.get request
 * 
 * @author auto create
 * @since 1.0, 2016.08.25
 */
class CainiaoOpenstorageSellerResourcedetailGetRequest
{
	/** 
	 * 商家资源id
	 **/
	private $sellerResourceId;
	
	private $apiParas = array();
	
	public function setSellerResourceId($sellerResourceId)
	{
		$this->sellerResourceId = $sellerResourceId;
		$this->apiParas["seller_resource_id"] = $sellerResourceId;
	}

	public function getSellerResourceId()
	{
		return $this->sellerResourceId;
	}

	public function getApiMethodName()
	{
		return "cainiao.openstorage.seller.resourcedetail.get";
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
