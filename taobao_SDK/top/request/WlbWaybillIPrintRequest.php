<?php
/**
 * TOP API: taobao.wlb.waybill.i.print request
 * 
 * @author auto create
 * @since 1.0, 2017.03.31
 */
class WlbWaybillIPrintRequest
{
	/** 
	 * 打印请求
	 **/
	private $waybillApplyPrintCheckRequest;
	
	private $apiParas = array();
	
	public function setWaybillApplyPrintCheckRequest($waybillApplyPrintCheckRequest)
	{
		$this->waybillApplyPrintCheckRequest = $waybillApplyPrintCheckRequest;
		$this->apiParas["waybill_apply_print_check_request"] = $waybillApplyPrintCheckRequest;
	}

	public function getWaybillApplyPrintCheckRequest()
	{
		return $this->waybillApplyPrintCheckRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.waybill.i.print";
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
