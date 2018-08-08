<?php
/**
 * TOP API: tmall.traderate.feeds.get request
 * 
 * @author auto create
 * @since 1.0, 2016.07.30
 */
class TmallTraderateFeedsGetRequest
{
	/** 
	 * 交易子订单ID
	 **/
	private $childTradeId;
	
	private $apiParas = array();
	
	public function setChildTradeId($childTradeId)
	{
		$this->childTradeId = $childTradeId;
		$this->apiParas["child_trade_id"] = $childTradeId;
	}

	public function getChildTradeId()
	{
		return $this->childTradeId;
	}

	public function getApiMethodName()
	{
		return "tmall.traderate.feeds.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->childTradeId,"childTradeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
