<?php
/**
 * TOP API: taobao.rp.refunds.agree request
 * 
 * @author auto create
 * @since 1.0, 2016.12.13
 */
class RpRefundsAgreeRequest
{
	/** 
	 * 短信验证码，如果退款金额达到一定的数量，后端会返回调用失败，并同时往卖家的手机发送一条短信验证码。接下来用收到的短信验证码再次发起API调用即可完成退款操作。
	 **/
	private $code;
	
	/** 
	 * 退款信息，格式：refund_id|amount|version|phase，其中refund_id为退款编号，amount为退款金额（以分为单位），version为退款最后更新时间（时间戳格式），phase为退款阶段（可选值为：onsale, aftersale，天猫退款必值，淘宝退款不需要传），多个退款以半角逗号分隔。
	 **/
	private $refundInfos;
	
	private $apiParas = array();
	
	public function setCode($code)
	{
		$this->code = $code;
		$this->apiParas["code"] = $code;
	}

	public function getCode()
	{
		return $this->code;
	}

	public function setRefundInfos($refundInfos)
	{
		$this->refundInfos = $refundInfos;
		$this->apiParas["refund_infos"] = $refundInfos;
	}

	public function getRefundInfos()
	{
		return $this->refundInfos;
	}

	public function getApiMethodName()
	{
		return "taobao.rp.refunds.agree";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->refundInfos,"refundInfos");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
