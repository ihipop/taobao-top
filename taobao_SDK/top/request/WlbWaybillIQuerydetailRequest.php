<?php
/**
 * TOP API: taobao.wlb.waybill.i.querydetail request
 * 
 * @author auto create
 * @since 1.0, 2017.03.31
 */
class WlbWaybillIQuerydetailRequest
{
	/** 
	 * 面单查询请求
	 **/
	private $waybillDetailQueryRequest;
	
	private $apiParas = array();
	
	public function setWaybillDetailQueryRequest($waybillDetailQueryRequest)
	{
		$this->waybillDetailQueryRequest = $waybillDetailQueryRequest;
		$this->apiParas["waybill_detail_query_request"] = $waybillDetailQueryRequest;
	}

	public function getWaybillDetailQueryRequest()
	{
		return $this->waybillDetailQueryRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.waybill.i.querydetail";
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
