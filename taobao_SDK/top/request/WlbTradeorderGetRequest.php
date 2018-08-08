<?php
/**
 * TOP API: taobao.wlb.tradeorder.get request
 * 
 * @author auto create
 * @since 1.0, 2016.11.14
 */
class WlbTradeorderGetRequest
{
	/** 
	 * 子交易号
	 **/
	private $subTradeId;
	
	/** 
	 * 指定交易类型的交易号
	 **/
	private $tradeId;
	
	/** 
	 * 交易类型: TAOBAO--淘宝交易 OTHER_TRADE--其它交易
	 **/
	private $tradeType;
	
	private $apiParas = array();
	
	public function setSubTradeId($subTradeId)
	{
		$this->subTradeId = $subTradeId;
		$this->apiParas["sub_trade_id"] = $subTradeId;
	}

	public function getSubTradeId()
	{
		return $this->subTradeId;
	}

	public function setTradeId($tradeId)
	{
		$this->tradeId = $tradeId;
		$this->apiParas["trade_id"] = $tradeId;
	}

	public function getTradeId()
	{
		return $this->tradeId;
	}

	public function setTradeType($tradeType)
	{
		$this->tradeType = $tradeType;
		$this->apiParas["trade_type"] = $tradeType;
	}

	public function getTradeType()
	{
		return $this->tradeType;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.tradeorder.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tradeId,"tradeId");
		RequestCheckUtil::checkNotNull($this->tradeType,"tradeType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
