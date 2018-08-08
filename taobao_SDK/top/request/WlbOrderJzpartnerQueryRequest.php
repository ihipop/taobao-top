<?php
/**
 * TOP API: taobao.wlb.order.jzpartner.query request
 * 
 * @author auto create
 * @since 1.0, 2015.04.13
 */
class WlbOrderJzpartnerQueryRequest
{
	/** 
	 * serviceType表示查询所有的支持服务类型的服务商。 家装干线服务     11 家装干支服务     12 家装干支装服务   13 卫浴大件干线     14 卫浴大件干支     15 卫浴大件安装     16 地板干线         17 地板干支         18 地板安装         19 灯具安装         20 卫浴小件安装     21 （注：同一个服务商针对不同类型的serviceType是具有不同的tpCode的）
	 **/
	private $serviceType;
	
	/** 
	 * 淘宝交易订单号，如果不填写Tid则必须填写serviceType。如果填写Tid，则表明只需要查询对应订单的服务商。
	 **/
	private $taobaoTradeId;
	
	private $apiParas = array();
	
	public function setServiceType($serviceType)
	{
		$this->serviceType = $serviceType;
		$this->apiParas["service_type"] = $serviceType;
	}

	public function getServiceType()
	{
		return $this->serviceType;
	}

	public function setTaobaoTradeId($taobaoTradeId)
	{
		$this->taobaoTradeId = $taobaoTradeId;
		$this->apiParas["taobao_trade_id"] = $taobaoTradeId;
	}

	public function getTaobaoTradeId()
	{
		return $this->taobaoTradeId;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.order.jzpartner.query";
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
