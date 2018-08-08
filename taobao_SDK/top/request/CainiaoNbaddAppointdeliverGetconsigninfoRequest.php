<?php
/**
 * TOP API: cainiao.nbadd.appointdeliver.getconsigninfo request
 * 
 * @author auto create
 * @since 1.0, 2017.06.29
 */
class CainiaoNbaddAppointdeliverGetconsigninfoRequest
{
	/** 
	 * 淘宝交易订单id
	 **/
	private $tradeOrderId;
	
	private $apiParas = array();
	
	public function setTradeOrderId($tradeOrderId)
	{
		$this->tradeOrderId = $tradeOrderId;
		$this->apiParas["trade_order_id"] = $tradeOrderId;
	}

	public function getTradeOrderId()
	{
		return $this->tradeOrderId;
	}

	public function getApiMethodName()
	{
		return "cainiao.nbadd.appointdeliver.getconsigninfo";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tradeOrderId,"tradeOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
