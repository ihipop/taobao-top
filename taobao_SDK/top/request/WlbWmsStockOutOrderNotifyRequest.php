<?php
/**
 * TOP API: taobao.wlb.wms.stock.out.order.notify request
 * 
 * @author auto create
 * @since 1.0, 2015.09.16
 */
class WlbWmsStockOutOrderNotifyRequest
{
	/** 
	 * 车牌号
	 **/
	private $carNo;
	
	/** 
	 * 承运商名称
	 **/
	private $carriersName;
	
	/** 
	 * 拓展属性
	 **/
	private $extendFields;
	
	/** 
	 * ERP单据ID
	 **/
	private $orderCode;
	
	/** 
	 * 订单创建时间
	 **/
	private $orderCreateTime;
	
	/** 
	 * 订单商品信息列表
	 **/
	private $orderItemList;
	
	/** 
	 * 单据类型 301 调拨出库单、901普通出库单、903 其他出库单 305 B2B出库
	 **/
	private $orderType;
	
	/** 
	 * ERP可选择性文本透传至WMS
	 **/
	private $outboundTypeDesc;
	
	/** 
	 * 取件人电话
	 **/
	private $pickCall;
	
	/** 
	 * 取件人身份证ID
	 **/
	private $pickId;
	
	/** 
	 * 取件人姓名
	 **/
	private $pickName;
	
	/** 
	 * 前物流订单号，如退货入库单可能会用到
	 **/
	private $prevOrderCode;
	
	/** 
	 * 收件人信息
	 **/
	private $receiverInfo;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	/** 
	 * 要求出库日期
	 **/
	private $sendTime;
	
	/** 
	 * 发货方信息
	 **/
	private $senderInfo;
	
	/** 
	 * 仓储编码
	 **/
	private $storeCode;
	
	/** 
	 * 出库方式
	 **/
	private $transportMode;
	
	private $apiParas = array();
	
	public function setCarNo($carNo)
	{
		$this->carNo = $carNo;
		$this->apiParas["car_no"] = $carNo;
	}

	public function getCarNo()
	{
		return $this->carNo;
	}

	public function setCarriersName($carriersName)
	{
		$this->carriersName = $carriersName;
		$this->apiParas["carriers_name"] = $carriersName;
	}

	public function getCarriersName()
	{
		return $this->carriersName;
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

	public function setOrderCode($orderCode)
	{
		$this->orderCode = $orderCode;
		$this->apiParas["order_code"] = $orderCode;
	}

	public function getOrderCode()
	{
		return $this->orderCode;
	}

	public function setOrderCreateTime($orderCreateTime)
	{
		$this->orderCreateTime = $orderCreateTime;
		$this->apiParas["order_create_time"] = $orderCreateTime;
	}

	public function getOrderCreateTime()
	{
		return $this->orderCreateTime;
	}

	public function setOrderItemList($orderItemList)
	{
		$this->orderItemList = $orderItemList;
		$this->apiParas["order_item_list"] = $orderItemList;
	}

	public function getOrderItemList()
	{
		return $this->orderItemList;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
	}

	public function setOutboundTypeDesc($outboundTypeDesc)
	{
		$this->outboundTypeDesc = $outboundTypeDesc;
		$this->apiParas["outbound_type_desc"] = $outboundTypeDesc;
	}

	public function getOutboundTypeDesc()
	{
		return $this->outboundTypeDesc;
	}

	public function setPickCall($pickCall)
	{
		$this->pickCall = $pickCall;
		$this->apiParas["pick_call"] = $pickCall;
	}

	public function getPickCall()
	{
		return $this->pickCall;
	}

	public function setPickId($pickId)
	{
		$this->pickId = $pickId;
		$this->apiParas["pick_id"] = $pickId;
	}

	public function getPickId()
	{
		return $this->pickId;
	}

	public function setPickName($pickName)
	{
		$this->pickName = $pickName;
		$this->apiParas["pick_name"] = $pickName;
	}

	public function getPickName()
	{
		return $this->pickName;
	}

	public function setPrevOrderCode($prevOrderCode)
	{
		$this->prevOrderCode = $prevOrderCode;
		$this->apiParas["prev_order_code"] = $prevOrderCode;
	}

	public function getPrevOrderCode()
	{
		return $this->prevOrderCode;
	}

	public function setReceiverInfo($receiverInfo)
	{
		$this->receiverInfo = $receiverInfo;
		$this->apiParas["receiver_info"] = $receiverInfo;
	}

	public function getReceiverInfo()
	{
		return $this->receiverInfo;
	}

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
	}

	public function setSendTime($sendTime)
	{
		$this->sendTime = $sendTime;
		$this->apiParas["send_time"] = $sendTime;
	}

	public function getSendTime()
	{
		return $this->sendTime;
	}

	public function setSenderInfo($senderInfo)
	{
		$this->senderInfo = $senderInfo;
		$this->apiParas["sender_info"] = $senderInfo;
	}

	public function getSenderInfo()
	{
		return $this->senderInfo;
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

	public function setTransportMode($transportMode)
	{
		$this->transportMode = $transportMode;
		$this->apiParas["transport_mode"] = $transportMode;
	}

	public function getTransportMode()
	{
		return $this->transportMode;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.wms.stock.out.order.notify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderCode,"orderCode");
		RequestCheckUtil::checkNotNull($this->orderCreateTime,"orderCreateTime");
		RequestCheckUtil::checkNotNull($this->orderType,"orderType");
		RequestCheckUtil::checkNotNull($this->storeCode,"storeCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
