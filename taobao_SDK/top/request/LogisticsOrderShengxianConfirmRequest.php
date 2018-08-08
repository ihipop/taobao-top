<?php
/**
 * TOP API: taobao.logistics.order.shengxian.confirm request
 * 
 * @author auto create
 * @since 1.0, 2015.08.13
 */
class LogisticsOrderShengxianConfirmRequest
{
	/** 
	 * 卖家联系人地址库ID，可以通过taobao.logistics.address.search接口查询到地址库ID。<br><font color='red'>如果为空，取的卖家的默认退货地址</font><br>
	 **/
	private $cancelId;
	
	/** 
	 * 1：冷链。0：常温
	 **/
	private $deliveryType;
	
	/** 
	 * 物流订单ID 。同淘宝交易订单互斥，淘宝交易号存在，，以淘宝交易号为准
	 **/
	private $logisId;
	
	/** 
	 * 运单号.具体一个物流公司的真实运单号码。支持多个运单号，多个运单号之间用英文分号（;）隔开，不能重复。淘宝官方物流会校验，请谨慎传入；
	 **/
	private $outSid;
	
	/** 
	 * 商家的IP地址
	 **/
	private $sellerIp;
	
	/** 
	 * 卖家联系人地址库ID，可以通过taobao.logistics.address.search接口查询到地址库ID。<font color='red'>如果为空，取的卖家的默认取货地址</font>如果service_code不为空，默认使用service_code如果service_code为空，sender_id不为空，使用sender_id对应的地址发货如果service_code与sender_id都为空，使用默认地址发货
	 **/
	private $senderId;
	
	/** 
	 * 仓库的服务代码标示，代码一个仓库的实体。(可以通过taobao.wlb.stores.baseinfo.get接口查询)如果service_code为空，默认通过sender_id来发货
	 **/
	private $serviceCode;
	
	/** 
	 * 淘宝交易ID
	 **/
	private $tid;
	
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

	public function setDeliveryType($deliveryType)
	{
		$this->deliveryType = $deliveryType;
		$this->apiParas["delivery_type"] = $deliveryType;
	}

	public function getDeliveryType()
	{
		return $this->deliveryType;
	}

	public function setLogisId($logisId)
	{
		$this->logisId = $logisId;
		$this->apiParas["logis_id"] = $logisId;
	}

	public function getLogisId()
	{
		return $this->logisId;
	}

	public function setOutSid($outSid)
	{
		$this->outSid = $outSid;
		$this->apiParas["out_sid"] = $outSid;
	}

	public function getOutSid()
	{
		return $this->outSid;
	}

	public function setSellerIp($sellerIp)
	{
		$this->sellerIp = $sellerIp;
		$this->apiParas["seller_ip"] = $sellerIp;
	}

	public function getSellerIp()
	{
		return $this->sellerIp;
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

	public function setServiceCode($serviceCode)
	{
		$this->serviceCode = $serviceCode;
		$this->apiParas["service_code"] = $serviceCode;
	}

	public function getServiceCode()
	{
		return $this->serviceCode;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.order.shengxian.confirm";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->deliveryType,"deliveryType");
		RequestCheckUtil::checkMinValue($this->logisId,1000,"logisId");
		RequestCheckUtil::checkNotNull($this->outSid,"outSid");
		RequestCheckUtil::checkMinValue($this->tid,1000,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
