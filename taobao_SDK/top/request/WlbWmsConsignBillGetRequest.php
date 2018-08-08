<?php
/**
 * TOP API: taobao.wlb.wms.consign.bill.get request
 * 
 * @author auto create
 * @since 1.0, 2016.11.14
 */
class WlbWmsConsignBillGetRequest
{
	/** 
	 * 菜鸟订单编码,cnOrderCode与orderCode必须有一个值不可为空
	 **/
	private $cnOrderCode;
	
	/** 
	 * ERP订单编码,cnOrderCode与orderCode必须有一个值不可为空
	 **/
	private $orderCode;
	
	private $apiParas = array();
	
	public function setCnOrderCode($cnOrderCode)
	{
		$this->cnOrderCode = $cnOrderCode;
		$this->apiParas["cn_order_code"] = $cnOrderCode;
	}

	public function getCnOrderCode()
	{
		return $this->cnOrderCode;
	}

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
		return "taobao.wlb.wms.consign.bill.get";
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
