<?php
/**
 * TOP API: taobao.rp.refund.review request
 * 
 * @author auto create
 * @since 1.0, 2014.11.10
 */
class RpRefundReviewRequest
{
	/** 
	 * 审核留言
	 **/
	private $message;
	
	/** 
	 * 审核人姓名
	 **/
	private $operator;
	
	/** 
	 * 退款单编号
	 **/
	private $refundId;
	
	/** 
	 * 退款阶段，可选值：售中：onsale，售后：aftersale
	 **/
	private $refundPhase;
	
	/** 
	 * 退款最后更新时间，以时间戳的方式表示
	 **/
	private $refundVersion;
	
	/** 
	 * 审核是否可用于批量退款，可选值：true（审核通过），false（审核不通过或反审核）
	 **/
	private $result;
	
	private $apiParas = array();
	
	public function setMessage($message)
	{
		$this->message = $message;
		$this->apiParas["message"] = $message;
	}

	public function getMessage()
	{
		return $this->message;
	}

	public function setOperator($operator)
	{
		$this->operator = $operator;
		$this->apiParas["operator"] = $operator;
	}

	public function getOperator()
	{
		return $this->operator;
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

	public function setRefundVersion($refundVersion)
	{
		$this->refundVersion = $refundVersion;
		$this->apiParas["refund_version"] = $refundVersion;
	}

	public function getRefundVersion()
	{
		return $this->refundVersion;
	}

	public function setResult($result)
	{
		$this->result = $result;
		$this->apiParas["result"] = $result;
	}

	public function getResult()
	{
		return $this->result;
	}

	public function getApiMethodName()
	{
		return "taobao.rp.refund.review";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->message,"message");
		RequestCheckUtil::checkNotNull($this->operator,"operator");
		RequestCheckUtil::checkNotNull($this->refundId,"refundId");
		RequestCheckUtil::checkNotNull($this->refundPhase,"refundPhase");
		RequestCheckUtil::checkNotNull($this->refundVersion,"refundVersion");
		RequestCheckUtil::checkNotNull($this->result,"result");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
