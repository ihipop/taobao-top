<?php
/**
 * TOP API: taobao.wlb.wms.stock.in.order.notify request
 * 
 * @author auto create
 * @since 1.0, 2015.09.16
 */
class WlbWmsStockInOrderNotifyRequest
{
	/** 
	 * 预期送达结束时间
	 **/
	private $expectEndTime;
	
	/** 
	 * 预期送达开始时间
	 **/
	private $expectStartTime;
	
	/** 
	 * 扩展属性, key-value结构，格式要求： 以英文分号“;”分隔每组key-value，以英文冒号“:”分隔key与value。如果value中带有分号，需要转成下划线“_”，如果带有冒号，需要转成中划线“-”
	 **/
	private $extendFields;
	
	/** 
	 * 可选择性文本透传至WMS，比如加工归还、委外归还、借出归还、内部归还等
	 **/
	private $inboundTypeDesc;
	
	/** 
	 * 入库单据编码
	 **/
	private $orderCode;
	
	/** 
	 * 单据创建时间
	 **/
	private $orderCreateTime;
	
	/** 
	 * 订单标记以逗号分隔：  9:上门退货入库 13: 退货时是否收取发票，默认不收取（即没13为多选项，如1,2,8,9）
	 **/
	private $orderFlag;
	
	/** 
	 * 系统自动生成
	 **/
	private $orderItemList;
	
	/** 
	 * 单据类型 601普通入库单、501销退入库单、302 调拨入库单、904其他入库单、306 B2B入库
	 **/
	private $orderType;
	
	/** 
	 * 来源单据号，如销售退货时填充原销售订单号
	 **/
	private $prevOrderCode;
	
	/** 
	 * 系统自动生成
	 **/
	private $receiverInfo;
	
	/** 
	 * 备注，销退入库订单需要留言备注填充到此字段
	 **/
	private $remark;
	
	/** 
	 * 销退时请提供退货的原因
	 **/
	private $returnReason;
	
	/** 
	 * 系统自动生成
	 **/
	private $senderInfo;
	
	/** 
	 * 仓库编码
	 **/
	private $storeCode;
	
	/** 
	 * 供应商编码，往来单位编码
	 **/
	private $supplierCode;
	
	/** 
	 * 供应商名称 ，往来单位名称
	 **/
	private $supplierName;
	
	/** 
	 * 运单号&托运单号 1)	入库单支持多运单号录入 2)	销退场景下如果是拒收（非妥投运单）由ERP填充原运单号
	 **/
	private $tmsOrderCode;
	
	/** 
	 * 配送公司编码，拒收（非妥投）的销退订单，由ERP填充原单配送公司编码
	 **/
	private $tmsServiceCode;
	
	/** 
	 * 快递公司名称
	 **/
	private $tmsServiceName;
	
	private $apiParas = array();
	
	public function setExpectEndTime($expectEndTime)
	{
		$this->expectEndTime = $expectEndTime;
		$this->apiParas["expect_end_time"] = $expectEndTime;
	}

	public function getExpectEndTime()
	{
		return $this->expectEndTime;
	}

	public function setExpectStartTime($expectStartTime)
	{
		$this->expectStartTime = $expectStartTime;
		$this->apiParas["expect_start_time"] = $expectStartTime;
	}

	public function getExpectStartTime()
	{
		return $this->expectStartTime;
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

	public function setInboundTypeDesc($inboundTypeDesc)
	{
		$this->inboundTypeDesc = $inboundTypeDesc;
		$this->apiParas["inbound_type_desc"] = $inboundTypeDesc;
	}

	public function getInboundTypeDesc()
	{
		return $this->inboundTypeDesc;
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

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
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

	public function setSupplierCode($supplierCode)
	{
		$this->supplierCode = $supplierCode;
		$this->apiParas["supplier_code"] = $supplierCode;
	}

	public function getSupplierCode()
	{
		return $this->supplierCode;
	}

	public function setSupplierName($supplierName)
	{
		$this->supplierName = $supplierName;
		$this->apiParas["supplier_name"] = $supplierName;
	}

	public function getSupplierName()
	{
		return $this->supplierName;
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
		return "taobao.wlb.wms.stock.in.order.notify";
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
