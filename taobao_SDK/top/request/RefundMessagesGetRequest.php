<?php
/**
 * TOP API: taobao.refund.messages.get request
 * 
 * @author auto create
 * @since 1.0, 2015.01.19
 */
class RefundMessagesGetRequest
{
	/** 
	 * 需返回的字段列表。可选值：RefundMessage结构体中的所有字段，以半角逗号(,)分隔。
	 **/
	private $fields;
	
	/** 
	 * 页码
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数
	 **/
	private $pageSize;
	
	/** 
	 * 退款单号
	 **/
	private $refundId;
	
	/** 
	 * 退款阶段，可选值：onsale（售中），aftersale（售后），天猫退款为必传。
	 **/
	private $refundPhase;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setRefundId($refundId)
	{
		$this->refundId = $refundId;
		$this->apiParas["refund_id"] = $refundId;
	}

	public function getRefundId()
	{
		return $this->refundId;
	}

	public function setRefundPhase($refundPhase)
	{
		$this->refundPhase = $refundPhase;
		$this->apiParas["refund_phase"] = $refundPhase;
	}

	public function getRefundPhase()
	{
		return $this->refundPhase;
	}

	public function getApiMethodName()
	{
		return "taobao.refund.messages.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkMaxListSize($this->fields,100,"fields");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->refundId,"refundId");
		RequestCheckUtil::checkMinValue($this->refundId,1,"refundId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
