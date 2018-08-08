<?php
/**
 * TOP API: taobao.wlb.imports.waybill.get request
 * 
 * @author auto create
 * @since 1.0, 2016.01.27
 */
class WlbImportsWaybillGetRequest
{
	/** 
	 * 物流订单号
	 **/
	private $orderCode;
	
	private $apiParas = array();
	
	public function setOrderCode($orderCode)
	{
		$this->orderCode = $orderCode;
		$this->apiParas["order_code"] = $orderCode;
	}

	public function getOrderCode()
	{
		return $this->orderCode;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.imports.waybill.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderCode,"orderCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
