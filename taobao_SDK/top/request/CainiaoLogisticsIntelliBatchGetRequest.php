<?php
/**
 * TOP API: cainiao.logistics.intelli.batch.get request
 * 
 * @author auto create
 * @since 1.0, 2016.09.20
 */
class CainiaoLogisticsIntelliBatchGetRequest
{
	/** 
	 * 批量智选物流请求参数
	 **/
	private $intelliLogisticsParams;
	
	private $apiParas = array();
	
	public function setIntelliLogisticsParams($intelliLogisticsParams)
	{
		$this->intelliLogisticsParams = $intelliLogisticsParams;
		$this->apiParas["intelli_logistics_params"] = $intelliLogisticsParams;
	}

	public function getIntelliLogisticsParams()
	{
		return $this->intelliLogisticsParams;
	}

	public function getApiMethodName()
	{
		return "cainiao.logistics.intelli.batch.get";
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
