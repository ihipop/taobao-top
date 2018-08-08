<?php
/**
 * TOP API: taobao.logistics.address.reachable.feedback request
 * 
 * @author auto create
 * @since 1.0, 2016.10.20
 */
class LogisticsAddressReachableFeedbackRequest
{
	/** 
	 * 地址可达性反馈数据对象
	 **/
	private $paramAddressReachableFeedbackTopRequest;
	
	private $apiParas = array();
	
	public function setParamAddressReachableFeedbackTopRequest($paramAddressReachableFeedbackTopRequest)
	{
		$this->paramAddressReachableFeedbackTopRequest = $paramAddressReachableFeedbackTopRequest;
		$this->apiParas["param_address_reachable_feedback_top_request"] = $paramAddressReachableFeedbackTopRequest;
	}

	public function getParamAddressReachableFeedbackTopRequest()
	{
		return $this->paramAddressReachableFeedbackTopRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.address.reachable.feedback";
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
