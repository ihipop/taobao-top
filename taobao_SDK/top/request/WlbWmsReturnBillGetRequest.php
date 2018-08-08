<?php
/**
 * TOP API: taobao.wlb.wms.return.bill.get request
 * 
 * @author auto create
 * @since 1.0, 2016.11.14
 */
class WlbWmsReturnBillGetRequest
{
	/** 
	 * 菜鸟订单编码，查询单个订单时orderCode与cnOrderCode必须有一个参数值不为空，两个参数都赋值时，以cnOrderCode值检索数据
	 **/
	private $cnOrderCode;
	
	/** 
	 * ERP订单编码，查询单个订单时orderCode与cnOrderCode必须有一个参数值不为空，两个参数都赋值时，以cnOrderCode值检索数据
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
		return "taobao.wlb.wms.return.bill.get";
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
