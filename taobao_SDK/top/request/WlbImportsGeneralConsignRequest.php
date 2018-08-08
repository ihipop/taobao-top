<?php
/**
 * TOP API: taobao.wlb.imports.general.consign request
 * 
 * @author auto create
 * @since 1.0, 2016.01.27
 */
class WlbImportsGeneralConsignRequest
{
	/** 
	 * 卖家退货地址库ID；不填写的话取默认退货地址；如果填写的cancelId对应多个地址，取第一个
	 **/
	private $cancelId;
	
	/** 
	 * 第1段物流承运商
	 **/
	private $firstLogistics;
	
	/** 
	 * 第1段物流运单号
	 **/
	private $firstWaybillno;
	
	/** 
	 * 物流资源ID
	 **/
	private $resourceId;
	
	/** 
	 * 卖家发货地址库ID；不填的话取默认发货地址；如果填写的senderId对应多个地址，取第一个
	 **/
	private $senderId;
	
	/** 
	 * 仓库编码
	 **/
	private $storeCode;
	
	/** 
	 * 交易订单id
	 **/
	private $tradeOrderId;
	
	private $apiParas = array();
	
	public function setCancelId($cancelId)
	{
		$this->cancelId = $cancelId;
		$this->apiParas["cancel_id"] = $cancelId;
	}

	public function getCancelId()
	{
		return $this->cancelId;
	}

	public function setFirstLogistics($firstLogistics)
	{
		$this->firstLogistics = $firstLogistics;
		$this->apiParas["first_logistics"] = $firstLogistics;
	}

	public function getFirstLogistics()
	{
		return $this->firstLogistics;
	}

	public function setFirstWaybillno($firstWaybillno)
	{
		$this->firstWaybillno = $firstWaybillno;
		$this->apiParas["first_waybillno"] = $firstWaybillno;
	}

	public function getFirstWaybillno()
	{
		return $this->firstWaybillno;
	}

	public function setResourceId($resourceId)
	{
		$this->resourceId = $resourceId;
		$this->apiParas["resource_id"] = $resourceId;
	}

	public function getResourceId()
	{
		return $this->resourceId;
	}

	public function setSenderId($senderId)
	{
		$this->senderId = $senderId;
		$this->apiParas["sender_id"] = $senderId;
	}

	public function getSenderId()
	{
		return $this->senderId;
	}

	public function setStoreCode($storeCode)
	{
		$this->storeCode = $storeCode;
		$this->apiParas["store_code"] = $storeCode;
	}

	public function getStoreCode()
	{
		return $this->storeCode;
	}

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
		return "taobao.wlb.imports.general.consign";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->firstLogistics,"firstLogistics");
		RequestCheckUtil::checkNotNull($this->firstWaybillno,"firstWaybillno");
		RequestCheckUtil::checkNotNull($this->resourceId,"resourceId");
		RequestCheckUtil::checkNotNull($this->storeCode,"storeCode");
		RequestCheckUtil::checkNotNull($this->tradeOrderId,"tradeOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
