<?php
/**
 * TOP API: cainiao.cboss.workplatform.logistics.iscainiaoorder request
 * 
 * @author auto create
 * @since 1.0, 2016.06.14
 */
class CainiaoCbossWorkplatformLogisticsIscainiaoorderRequest
{
	/** 
	 * 交易单号
	 **/
	private $tradeId;
	
	private $apiParas = array();
	
	public function setTradeId($tradeId)
	{
		$this->tradeId = $tradeId;
		$this->apiParas["trade_id"] = $tradeId;
	}

	public function getTradeId()
	{
		return $this->tradeId;
	}

	public function getApiMethodName()
	{
		return "cainiao.cboss.workplatform.logistics.iscainiaoorder";
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
