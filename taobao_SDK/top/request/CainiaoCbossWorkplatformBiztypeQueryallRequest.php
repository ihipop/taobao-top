<?php
/**
 * TOP API: cainiao.cboss.workplatform.biztype.queryall request
 * 
 * @author auto create
 * @since 1.0, 2016.06.14
 */
class CainiaoCbossWorkplatformBiztypeQueryallRequest
{
	/** 
	 * level
	 **/
	private $level;
	
	/** 
	 * tradeId
	 **/
	private $tradeId;
	
	private $apiParas = array();
	
	public function setLevel($level)
	{
		$this->level = $level;
		$this->apiParas["level"] = $level;
	}

	public function getLevel()
	{
		return $this->level;
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

	public function getApiMethodName()
	{
		return "cainiao.cboss.workplatform.biztype.queryall";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tradeId,"tradeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
