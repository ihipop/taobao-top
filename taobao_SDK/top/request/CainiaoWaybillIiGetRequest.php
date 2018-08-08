<?php
/**
 * TOP API: cainiao.waybill.ii.get request
 * 
 * @author auto create
 * @since 1.0, 2017.04.10
 */
class CainiaoWaybillIiGetRequest
{
	/** 
	 * 入参信息
	 **/
	private $paramWaybillCloudPrintApplyNewRequest;
	
	private $apiParas = array();
	
	public function setParamWaybillCloudPrintApplyNewRequest($paramWaybillCloudPrintApplyNewRequest)
	{
		$this->paramWaybillCloudPrintApplyNewRequest = $paramWaybillCloudPrintApplyNewRequest;
		$this->apiParas["param_waybill_cloud_print_apply_new_request"] = $paramWaybillCloudPrintApplyNewRequest;
	}

	public function getParamWaybillCloudPrintApplyNewRequest()
	{
		return $this->paramWaybillCloudPrintApplyNewRequest;
	}

	public function getApiMethodName()
	{
		return "cainiao.waybill.ii.get";
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
