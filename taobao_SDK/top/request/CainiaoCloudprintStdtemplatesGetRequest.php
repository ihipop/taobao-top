<?php
/**
 * TOP API: cainiao.cloudprint.stdtemplates.get request
 * 
 * @author auto create
 * @since 1.0, 2017.03.29
 */
class CainiaoCloudprintStdtemplatesGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "cainiao.cloudprint.stdtemplates.get";
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
