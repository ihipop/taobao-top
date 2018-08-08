<?php
/**
 * TOP API: cainiao.cloudprint.mystdtemplates.get request
 * 
 * @author auto create
 * @since 1.0, 2016.09.19
 */
class CainiaoCloudprintMystdtemplatesGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "cainiao.cloudprint.mystdtemplates.get";
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
