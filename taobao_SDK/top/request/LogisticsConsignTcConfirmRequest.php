<?php
/**
 * TOP API: taobao.logistics.consign.tc.confirm request
 * 
 * @author auto create
 * @since 1.0, 2015.08.17
 */
class LogisticsConsignTcConfirmRequest
{
	/** 
	 * ERP的名称
	 **/
	private $appName;
	
	/** 
	 * 扩展字段 K:V;
	 **/
	private $extendFields;
	
	/** 
	 * 发货的包裹
	 **/
	private $goodsList;
	
	/** 
	 * 已发货的外部订单号
	 **/
	private $outTradeNo;
	
	/** 
	 * 货主id
	 **/
	private $providerId;
	
	/** 
	 * 卖家id
	 **/
	private $sellerId;
	
	/** 
	 * 待发货的淘宝主交易号
	 **/
	private $tradeId;
	
	private $apiParas = array();
	
	public function setAppName($appName)
	{
		$this->appName = $appName;
		$this->apiParas["app_name"] = $appName;
	}

	public function getAppName()
	{
		return $this->appName;
	}

	public function setExtendFields($extendFields)
	{
		$this->extendFields = $extendFields;
		$this->apiParas["extend_fields"] = $extendFields;
	}

	public function getExtendFields()
	{
		return $this->extendFields;
	}

	public function setGoodsList($goodsList)
	{
		$this->goodsList = $goodsList;
		$this->apiParas["goods_list"] = $goodsList;
	}

	public function getGoodsList()
	{
		return $this->goodsList;
	}

	public function setOutTradeNo($outTradeNo)
	{
		$this->outTradeNo = $outTradeNo;
		$this->apiParas["out_trade_no"] = $outTradeNo;
	}

	public function getOutTradeNo()
	{
		return $this->outTradeNo;
	}

	public function setProviderId($providerId)
	{
		$this->providerId = $providerId;
		$this->apiParas["provider_id"] = $providerId;
	}

	public function getProviderId()
	{
		return $this->providerId;
	}

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
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
		return "taobao.logistics.consign.tc.confirm";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appName,"appName");
		RequestCheckUtil::checkNotNull($this->outTradeNo,"outTradeNo");
		RequestCheckUtil::checkNotNull($this->providerId,"providerId");
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
		RequestCheckUtil::checkNotNull($this->tradeId,"tradeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
