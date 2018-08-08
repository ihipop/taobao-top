<?php
/**
 * TOP API: taobao.wlb.imports.resource.get request
 * 
 * @author auto create
 * @since 1.0, 2016.01.27
 */
class WlbImportsResourceGetRequest
{
	/** 
	 * 卖家发货地区域ID
	 **/
	private $fromId;
	
	/** 
	 * 买家收货地信息
	 **/
	private $toAddress;
	
	private $apiParas = array();
	
	public function setFromId($fromId)
	{
		$this->fromId = $fromId;
		$this->apiParas["from_id"] = $fromId;
	}

	public function getFromId()
	{
		return $this->fromId;
	}

	public function setToAddress($toAddress)
	{
		$this->toAddress = $toAddress;
		$this->apiParas["to_address"] = $toAddress;
	}

	public function getToAddress()
	{
		return $this->toAddress;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.imports.resource.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fromId,"fromId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
