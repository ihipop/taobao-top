<?php
/**
 * TOP API: cainiao.logistics.intelli.get request
 * 
 * @author auto create
 * @since 1.0, 2016.09.20
 */
class CainiaoLogisticsIntelliGetRequest
{
	/** 
	 * 智选物流请求参数类
	 **/
	private $intelliLogisticsParam;
	
	private $apiParas = array();
	
	public function setIntelliLogisticsParam($intelliLogisticsParam)
	{
		$this->intelliLogisticsParam = $intelliLogisticsParam;
		$this->apiParas["intelli_logistics_param"] = $intelliLogisticsParam;
	}

	public function getIntelliLogisticsParam()
	{
		return $this->intelliLogisticsParam;
	}

	public function getApiMethodName()
	{
		return "cainiao.logistics.intelli.get";
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
