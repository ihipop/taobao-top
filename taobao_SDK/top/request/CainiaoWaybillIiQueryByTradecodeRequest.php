<?php
/**
 * TOP API: cainiao.waybill.ii.query.by.tradecode request
 * 
 * @author auto create
 * @since 1.0, 2016.07.01
 */
class CainiaoWaybillIiQueryByTradecodeRequest
{
	/** 
	 * 订单号列表
	 **/
	private $paramList;
	
	private $apiParas = array();
	
	public function setParamList($paramList)
	{
		$this->paramList = $paramList;
		$this->apiParas["param_list"] = $paramList;
	}

	public function getParamList()
	{
		return $this->paramList;
	}

	public function getApiMethodName()
	{
		return "cainiao.waybill.ii.query.by.tradecode";
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
