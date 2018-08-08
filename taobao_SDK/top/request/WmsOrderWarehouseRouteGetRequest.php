<?php
/**
 * TOP API: taobao.wms.order.warehouse.route.get request
 * 
 * @author auto create
 * @since 1.0, 2015.08.14
 */
class WmsOrderWarehouseRouteGetRequest
{
	/** 
	 * 订单编号
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
		return "taobao.wms.order.warehouse.route.get";
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
