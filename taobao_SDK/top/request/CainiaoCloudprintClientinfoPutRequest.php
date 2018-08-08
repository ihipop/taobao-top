<?php
/**
 * TOP API: cainiao.cloudprint.clientinfo.put request
 * 
 * @author auto create
 * @since 1.0, 2016.06.23
 */
class CainiaoCloudprintClientinfoPutRequest
{
	/** 
	 * 收集的数据，json格式
	 **/
	private $jsonData;
	
	private $apiParas = array();
	
	public function setJsonData($jsonData)
	{
		$this->jsonData = $jsonData;
		$this->apiParas["json_data"] = $jsonData;
	}

	public function getJsonData()
	{
		return $this->jsonData;
	}

	public function getApiMethodName()
	{
		return "cainiao.cloudprint.clientinfo.put";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->jsonData,"jsonData");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
