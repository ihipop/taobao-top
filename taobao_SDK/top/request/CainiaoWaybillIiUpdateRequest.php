<?php
/**
 * TOP API: cainiao.waybill.ii.update request
 * 
 * @author auto create
 * @since 1.0, 2016.11.04
 */
class CainiaoWaybillIiUpdateRequest
{
	/** 
	 * 更新请求信息
	 **/
	private $paramWaybillCloudPrintUpdateRequest;
	
	private $apiParas = array();
	
	public function setParamWaybillCloudPrintUpdateRequest($paramWaybillCloudPrintUpdateRequest)
	{
		$this->paramWaybillCloudPrintUpdateRequest = $paramWaybillCloudPrintUpdateRequest;
		$this->apiParas["param_waybill_cloud_print_update_request"] = $paramWaybillCloudPrintUpdateRequest;
	}

	public function getParamWaybillCloudPrintUpdateRequest()
	{
		return $this->paramWaybillCloudPrintUpdateRequest;
	}

	public function getApiMethodName()
	{
		return "cainiao.waybill.ii.update";
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
