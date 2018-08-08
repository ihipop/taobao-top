<?php
/**
 * TOP API: taobao.wlb.wms.consign.order.notify request
 * 
 * @author auto create
 * @since 1.0, 2016.09.09
 */
class WlbWmsConsignOrderNotifyRequest
{
	/** 
	 * 废弃，支付宝交易号
	 **/
	private $alipayNo;
	
	/** 
	 * 订单应收金额，消费者还需要付的金额，单位分
	 **/
	private $arAmount;
	
	/** 
	 * 废弃，车牌号
	 **/
	private $carNo;
	
	/** 
	 * 废弃，承运商名称
	 **/
	private $carriersName;
	
	/** 
	 * 配送要求
	 **/
	private $deliverRequirements;
	
	/** 
	 * 订单优惠金额，整单优惠金额，单位分
	 **/
	private $discountAmount;
	
	/** 
	 * 拓展属性
	 **/
	private $extendFields;
	
	/** 
	 * 订单已付金额，消费者已经支付的金额，单位分
	 **/
	private $gotAmount;
	
	/** 
	 * 发票信息列表
	 **/
	private $invoiceInfoList;
	
	/** 
	 * 订单总金额,=总商品金额-订单优惠金额+快递费用，单位分
	 **/
	private $orderAmount;
	
	/** 
	 * ERP订单号
	 **/
	private $orderCode;
	
	/** 
	 * 订单创建时间,ERP创建订单时间
	 **/
	private $orderCreateTime;
	
	/** 
	 * 订单审核时间,ERP创建支付时间
	 **/
	private $orderExaminationTime;
	
	/** 
	 * 订单标识 (1: cod –货到付款，4:invoiceinfo-需要发票)
	 **/
	private $orderFlag;
	
	/** 
	 * 订单商品信息列表
	 **/
	private $orderItemList;
	
	/** 
	 * 订单支付时间
	 **/
	private $orderPayTime;
	
	/** 
	 * 废弃，订单优先级0 -10，根据订单作业优先级设置，数字越大，优先级越高
	 **/
	private $orderPriority;
	
	/** 
	 * 下单时间，订单在交易平台创建时间
	 **/
	private $orderShopCreateTime;
	
	/** 
	 * 订单来源（213 天猫，201 淘宝，214 京东，202 1688 阿里中文站 ，203 苏宁在线，204 亚马逊中国，205 当当，208 1号店，207 唯品会，209 国美在线，210 拍拍，206 易贝ebay，211 聚美优品，212 乐蜂网，215 邮乐，216 凡客，217 优购，218 银泰，219 易讯，221 聚尚网，222 蘑菇街，223 POS门店，301 其他）
	 **/
	private $orderSource;
	
	/** 
	 * 废弃，交易内部来源，文本透传 WAP(手机);HITAO(嗨淘);TOP(TOP平台);TAOBAO(普通淘宝);JHS(聚划算) 一笔订单可能同时有以上多个标记，则以逗号分隔
	 **/
	private $orderSubSource;
	
	/** 
	 * 单据类型 201 一般交易出库单 202 B2B交易出库单 502 换货出库单 503 补发出库单
	 **/
	private $orderType;
	
	/** 
	 * 废弃，取件人电话
	 **/
	private $pickerCall;
	
	/** 
	 * 废弃，取件人身份证
	 **/
	private $pickerId;
	
	/** 
	 * 废弃，取件人姓名
	 **/
	private $pickerName;
	
	/** 
	 * 快递费用，单位分
	 **/
	private $postfee;
	
	/** 
	 * 前物流订单号，订单类型为502 换货出库单 503 补发出库单时，需求传入此内容
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
	 * 发货方信息
	 **/
	private $senderInfo;
	
	/** 
	 * COD服务费，单位分
	 **/
	private $serviceFee;
	
	/** 
	 * 仓库编码，此字段为空时，由菜鸟路由仓库发货
	 **/
	private $storeCode;
	
	/** 
	 * 快递公司编码，此字段为空时，由菜鸟选择快递配送
	 **/
	private $tmsServiceCode;
	
	/** 
	 * 快递公司名称
	 **/
	private $tmsServiceName;
	
	/** 
	 * 废弃，出库方式（自提，快递，销毁）
	 **/
	private $transportMode;
	
	private $apiParas = array();
	
	public function setAlipayNo($alipayNo)
	{
		$this->alipayNo = $alipayNo;
		$this->apiParas["alipay_no"] = $alipayNo;
	}

	public function getAlipayNo()
	{
		return $this->alipayNo;
	}

	public function setArAmount($arAmount)
	{
		$this->arAmount = $arAmount;
		$this->apiParas["ar_amount"] = $arAmount;
	}

	public function getArAmount()
	{
		return $this->arAmount;
	}

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

	public function setDeliverRequirements($deliverRequirements)
	{
		$this->deliverRequirements = $deliverRequirements;
		$this->apiParas["deliver_requirements"] = $deliverRequirements;
	}

	public function getDeliverRequirements()
	{
		return $this->deliverRequirements;
	}

	public function setDiscountAmount($discountAmount)
	{
		$this->discountAmount = $discountAmount;
		$this->apiParas["discount_amount"] = $discountAmount;
	}

	public function getDiscountAmount()
	{
		return $this->discountAmount;
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

	public function setGotAmount($gotAmount)
	{
		$this->gotAmount = $gotAmount;
		$this->apiParas["got_amount"] = $gotAmount;
	}

	public function getGotAmount()
	{
		return $this->gotAmount;
	}

	public function setInvoiceInfoList($invoiceInfoList)
	{
		$this->invoiceInfoList = $invoiceInfoList;
		$this->apiParas["invoice_info_list"] = $invoiceInfoList;
	}

	public function getInvoiceInfoList()
	{
		return $this->invoiceInfoList;
	}

	public function setOrderAmount($orderAmount)
	{
		$this->orderAmount = $orderAmount;
		$this->apiParas["order_amount"] = $orderAmount;
	}

	public function getOrderAmount()
	{
		return $this->orderAmount;
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

	public function setOrderExaminationTime($orderExaminationTime)
	{
		$this->orderExaminationTime = $orderExaminationTime;
		$this->apiParas["order_examination_time"] = $orderExaminationTime;
	}

	public function getOrderExaminationTime()
	{
		return $this->orderExaminationTime;
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

	public function setOrderPayTime($orderPayTime)
	{
		$this->orderPayTime = $orderPayTime;
		$this->apiParas["order_pay_time"] = $orderPayTime;
	}

	public function getOrderPayTime()
	{
		return $this->orderPayTime;
	}

	public function setOrderPriority($orderPriority)
	{
		$this->orderPriority = $orderPriority;
		$this->apiParas["order_priority"] = $orderPriority;
	}

	public function getOrderPriority()
	{
		return $this->orderPriority;
	}

	public function setOrderShopCreateTime($orderShopCreateTime)
	{
		$this->orderShopCreateTime = $orderShopCreateTime;
		$this->apiParas["order_shop_create_time"] = $orderShopCreateTime;
	}

	public function getOrderShopCreateTime()
	{
		return $this->orderShopCreateTime;
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

	public function setOrderSubSource($orderSubSource)
	{
		$this->orderSubSource = $orderSubSource;
		$this->apiParas["order_sub_source"] = $orderSubSource;
	}

	public function getOrderSubSource()
	{
		return $this->orderSubSource;
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

	public function setPickerCall($pickerCall)
	{
		$this->pickerCall = $pickerCall;
		$this->apiParas["picker_call"] = $pickerCall;
	}

	public function getPickerCall()
	{
		return $this->pickerCall;
	}

	public function setPickerId($pickerId)
	{
		$this->pickerId = $pickerId;
		$this->apiParas["picker_id"] = $pickerId;
	}

	public function getPickerId()
	{
		return $this->pickerId;
	}

	public function setPickerName($pickerName)
	{
		$this->pickerName = $pickerName;
		$this->apiParas["picker_name"] = $pickerName;
	}

	public function getPickerName()
	{
		return $this->pickerName;
	}

	public function setPostfee($postfee)
	{
		$this->postfee = $postfee;
		$this->apiParas["postfee"] = $postfee;
	}

	public function getPostfee()
	{
		return $this->postfee;
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

	public function setSenderInfo($senderInfo)
	{
		$this->senderInfo = $senderInfo;
		$this->apiParas["sender_info"] = $senderInfo;
	}

	public function getSenderInfo()
	{
		return $this->senderInfo;
	}

	public function setServiceFee($serviceFee)
	{
		$this->serviceFee = $serviceFee;
		$this->apiParas["service_fee"] = $serviceFee;
	}

	public function getServiceFee()
	{
		return $this->serviceFee;
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
		return "taobao.wlb.wms.consign.order.notify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->arAmount,0,"arAmount");
		RequestCheckUtil::checkMinValue($this->gotAmount,0,"gotAmount");
		RequestCheckUtil::checkMinValue($this->orderAmount,0,"orderAmount");
		RequestCheckUtil::checkNotNull($this->orderCode,"orderCode");
		RequestCheckUtil::checkNotNull($this->orderType,"orderType");
		RequestCheckUtil::checkMinValue($this->serviceFee,0,"serviceFee");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
