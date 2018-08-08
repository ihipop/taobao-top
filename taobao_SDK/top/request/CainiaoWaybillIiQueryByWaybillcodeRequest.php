<?php
/**
 * TOP API: cainiao.waybill.ii.query.by.waybillcode request
 * 
 * @author auto create
 * @since 1.0, 2016.11.04
 */
class CainiaoWaybillIiQueryByWaybillcodeRequest
{
	/** 
	 * 系统自动生成
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
		return "cainiao.waybill.ii.query.by.waybillcode";
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
