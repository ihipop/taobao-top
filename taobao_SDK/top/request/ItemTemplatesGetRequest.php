<?php
/**
 * TOP API: taobao.item.templates.get request
 * 
 * @author auto create
 * @since 1.0, 2016.03.05
 */
class ItemTemplatesGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.item.templates.get";
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
