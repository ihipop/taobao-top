<?php
/**
 * TOP API: taobao.wlb.waybill.i.get request
 * 
 * @author auto create
 * @since 1.0, 2017.03.31
 */
class WlbWaybillIGetRequest
{
	/** 
	 * 面单申请
	 **/
	private $waybillApplyNewRequest;
	
	private $apiParas = array();
	
	public function setWaybillApplyNewRequest($waybillApplyNewRequest)
	{
		$this->waybillApplyNewRequest = $waybillApplyNewRequest;
		$this->apiParas["waybill_apply_new_request"] = $waybillApplyNewRequest;
	}

	public function getWaybillApplyNewRequest()
	{
		return $this->waybillApplyNewRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.waybill.i.get";
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
