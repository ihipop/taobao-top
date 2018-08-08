<?php
/**
 * TOP API: taobao.rp.returngoods.refill request
 * 
 * @author auto create
 * @since 1.0, 2014.11.10
 */
class RpReturngoodsRefillRequest
{
	/** 
	 * 物流公司编号
	 **/
	private $logisticsCompanyCode;
	
	/** 
	 * 物流公司运单号
	 **/
	private $logisticsWaybillNo;
	
	/** 
	 * 退款单编号
	 **/
	private $refundId;
	
	/** 
	 * 退款阶段，可选值：售中：onsale，售后：aftersale
	 **/
	private $refundPhase;
	
	private $apiParas = array();
	
	public function setLogisticsCompanyCode($logisticsCompanyCode)
	{
		$this->logisticsCompanyCode = $logisticsCompanyCode;
		$this->apiParas["logistics_company_code"] = $logisticsCompanyCode;
	}

	public function getLogisticsCompanyCode()
	{
		return $this->logisticsCompanyCode;
	}

	public function setLogisticsWaybillNo($logisticsWaybillNo)
	{
		$this->logisticsWaybillNo = $logisticsWaybillNo;
		$this->apiParas["logistics_waybill_no"] = $logisticsWaybillNo;
	}

	public function getLogisticsWaybillNo()
	{
		return $this->logisticsWaybillNo;
	}

	public function setRefundId($refundId)
	{
		$this->refundId = $refundId;
		$this->apiParas["refund_id"] = $refundId;
	}

	public function getRefundId()
	{
		return $this->refundId;
	}

	public function setRefundPhase($refundPhase)
	{
		$this->refundPhase = $refundPhase;
		$this->apiParas["refund_phase"] = $refundPhase;
	}

	public function getRefundPhase()
	{
		return $this->refundPhase;
	}

	public function getApiMethodName()
	{
		return "taobao.rp.returngoods.refill";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->logisticsCompanyCode,"logisticsCompanyCode");
		RequestCheckUtil::checkNotNull($this->logisticsWaybillNo,"logisticsWaybillNo");
		RequestCheckUtil::checkNotNull($this->refundId,"refundId");
		RequestCheckUtil::checkNotNull($this->refundPhase,"refundPhase");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
