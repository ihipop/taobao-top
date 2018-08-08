<?php
/**
 * TOP API: taobao.wlb.wms.return.order.notify request
 * 
 * @author auto create
 * @since 1.0, 2015.08.17
 */
class WlbWmsReturnOrderNotifyRequest
{
	/** 
	 * 买家昵称
	 **/
	private $buyerNick;
	
	/** 
	 * 扩展属性, key-value结构，格式要求： 以英文分号“;”分隔每组key-value，以英文冒号“:”分隔key与value。如果value中带有分号，需要转成下划线“_”，如果带有冒号，需要转成中划线“-”
	 **/
	private $extendFields;
	
	/** 
	 * ERP单据编码
	 **/
	private $orderCode;
	
	/** 
	 * ERP订单创建时间
	 **/
	private $orderCreateTime;
	
	/** 
	 * 用字符串格式来表示订单标记列表：比如VISIT^ SELLER_AFFORD^SYNC_RETURN_BILL 等，中间用“^”来隔开 ----------------------------------------  订单标记list（所有字母全部大写）： 9:VISIT-上门12: SELLER_AFFORD 是否卖家承担运费 默认是，即没 13: SYNC_RETURN_BILL，同时退回发票
	 **/
	private $orderFlag;
	
	/** 
	 * 商品信息列表
	 **/
	private $orderItemList;
	
	/** 
	 * 订单来源 201 淘宝，202 1688，203 苏宁，204 亚马逊中国，205 当当，206 ebay，207 唯品会，208 1号店，209 国美，210 拍拍，211 聚美优品，212 乐峰，214 京东，301 其他
	 **/
	private $orderSource;
	
	/** 
	 * 订单类型 501 销退入库
	 **/
	private $orderType;
	
	/** 
	 * 货主ID
	 **/
	private $ownerUserId;
	
	/** 
	 * 来源单据号，销售退货时填充原发货的LBX号
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
	 * 销退时请提供退货的原因
	 **/
	private $returnReason;
	
	/** 
	 * 发件人信息
	 **/
	private $senderInfo;
	
	/** 
	 * 仓库编码
	 **/
	private $storeCode;
	
	/** 
	 * 运单号
	 **/
	private $tmsOrderCode;
	
	/** 
	 * 快递公司编码
	 **/
	private $tmsServiceCode;
	
	/** 
	 * 快递公司名称
	 **/
	private $tmsServiceName;
	
	private $apiParas = array();
	
	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
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

	public function setOrderFlag($orderFlag)
	{
		$this->orderFlag = $orderFlag;
		$this->apiParas["order_flag"] = $orderFlag;
	}

	public function getOrderFlag()
	{
		return $this->orderFlag;
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

	public function setOrderSource($orderSource)
	{
		$this->orderSource = $orderSource;
		$this->apiParas["order_source"] = $orderSource;
	}

	public function getOrderSource()
	{
		return $this->orderSource;
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

	public function setOwnerUserId($ownerUserId)
	{
		$this->ownerUserId = $ownerUserId;
		$this->apiParas["owner_user_id"] = $ownerUserId;
	}

	public function getOwnerUserId()
	{
		return $this->ownerUserId;
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

	public function setReturnReason($returnReason)
	{
		$this->returnReason = $returnReason;
		$this->apiParas["return_reason"] = $returnReason;
	}

	public function getReturnReason()
	{
		return $this->returnReason;
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

	public function setTmsOrderCode($tmsOrderCode)
	{
		$this->tmsOrderCode = $tmsOrderCode;
		$this->apiParas["tms_order_code"] = $tmsOrderCode;
	}

	public function getTmsOrderCode()
	{
		return $this->tmsOrderCode;
	}

	public function setTmsServiceCode($tmsServiceCode)
	{
		$this->tmsServiceCode = $tmsServiceCode;
		$this->apiParas["tms_service_code"] = $tmsServiceCode;
	}

	public function getTmsServiceCode()
	{
		return $this->tmsServiceCode;
	}

	public function setTmsServiceName($tmsServiceName)
	{
		$this->tmsServiceName = $tmsServiceName;
		$this->apiParas["tms_service_name"] = $tmsServiceName;
	}

	public function getTmsServiceName()
	{
		return $this->tmsServiceName;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.wms.return.order.notify";
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
