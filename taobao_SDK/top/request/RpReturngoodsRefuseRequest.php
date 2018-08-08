<?php
/**
 * TOP API: taobao.rp.returngoods.refuse request
 * 
 * @author auto create
 * @since 1.0, 2016.02.19
 */
class RpReturngoodsRefuseRequest
{
	/** 
	 * 退款编号
	 **/
	private $refundId;
	
	/** 
	 * 退款服务状态，售后或者售中
	 **/
	private $refundPhase;
	
	/** 
	 * 退款版本号
	 **/
	private $refundVersion;
	
	/** 
	 * 拒绝退货凭证图片，必须图片格式，大小不能超过5M
	 **/
	private $refuseProof;
	
	/** 
	 * 拒绝原因编号，会提供拒绝原因列表供选择
	 **/
	private $refuseReasonId;
	
	private $apiParas = array();
	
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

	public function getApiMethodName()
	{
		return "taobao.rp.returngoods.refuse";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->refundId,"refundId");
		RequestCheckUtil::checkNotNull($this->refundPhase,"refundPhase");
		RequestCheckUtil::checkNotNull($this->refundVersion,"refundVersion");
		RequestCheckUtil::checkNotNull($this->refuseProof,"refuseProof");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
