<?php
/**
 * TOP API: taobao.astrolabe.mapping.get request
 * 
 * @author auto create
 * @since 1.0, 2016.08.15
 */
class AstrolabeMappingGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.astrolabe.mapping.get";
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
