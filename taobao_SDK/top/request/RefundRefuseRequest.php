<?php
/**
 * TOP API: taobao.refund.refuse request
 * 
 * @author auto create
 * @since 1.0, 2017.04.21
 */
class RefundRefuseRequest
{
	/** 
	 * 退款记录对应的交易子订单号
	 **/
	private $oid;
	
	/** 
	 * 退款单号
	 **/
	private $refundId;
	
	/** 
	 * 可选值为：售中：onsale，售后：aftersale，天猫退款为必填项。
	 **/
	private $refundPhase;
	
	/** 
	 * 退款版本号，天猫退款为必填项。
	 **/
	private $refundVersion;
	
	/** 
	 * 拒绝退款时的说明信息，长度2-200
	 **/
	private $refuseMessage;
	
	/** 
	 * 拒绝退款时的退款凭证，一般是卖家拒绝退款时使用的发货凭证，最大长度130000字节，支持的图片格式：GIF, JPG, PNG。天猫退款为必填项。
	 **/
	private $refuseProof;
	
	/** 
	 * 拒绝原因编号，会提供用户拒绝原因列表供选择
	 **/
	private $refuseReasonId;
	
	/** 
	 * 退款记录对应的交易订单号
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setOid($oid)
	{
		$this->oid = $oid;
		$this->apiParas["oid"] = $oid;
	}

	public function getOid()
	{
		return $this->oid;
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

	public function setRefuseMessage($refuseMessage)
	{
		$this->refuseMessage = $refuseMessage;
		$this->apiParas["refuse_message"] = $refuseMessage;
	}

	public function getRefuseMessage()
	{
		return $this->refuseMessage;
	}

	public function setRefuseProof($refuseProof)
	{
		$this->refuseProof = $refuseProof;
		$this->apiParas["refuse_proof"] = $refuseProof;
	}

	public function getRefuseProof()
	{
		return $this->refuseProof;
	}

	public function setRefuseReasonId($refuseReasonId)
	{
		$this->refuseReasonId = $refuseReasonId;
		$this->apiParas["refuse_reason_id"] = $refuseReasonId;
	}

	public function getRefuseReasonId()
	{
		return $this->refuseReasonId;
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
		return "taobao.refund.refuse";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->refundId,"refundId");
		RequestCheckUtil::checkNotNull($this->refuseMessage,"refuseMessage");
		RequestCheckUtil::checkMaxLength($this->refuseMessage,200,"refuseMessage");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
