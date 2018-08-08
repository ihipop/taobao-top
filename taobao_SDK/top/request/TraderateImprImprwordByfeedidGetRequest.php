<?php
/**
 * TOP API: taobao.traderate.impr.imprword.byfeedid.get request
 * 
 * @author auto create
 * @since 1.0, 2016.04.13
 */
class TraderateImprImprwordByfeedidGetRequest
{
	/** 
	 * 交易订单id号（如果包含子订单，请使用子订单id号）
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
		return "taobao.traderate.impr.imprword.byfeedid.get";
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
