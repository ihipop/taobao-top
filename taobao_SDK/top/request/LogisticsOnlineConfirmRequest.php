<?php
/**
 * TOP API: taobao.logistics.online.confirm request
 * 
 * @author auto create
 * @since 1.0, 2016.11.10
 */
class LogisticsOnlineConfirmRequest
{
	/** 
	 * 表明是否是拆单，默认值0，1表示拆单
	 **/
	private $isSplit;
	
	/** 
	 * 运单号.具体一个物流公司的真实运单号码。淘宝官方物流会校验，请谨慎传入；
	 **/
	private $outSid;
	
	/** 
	 * 商家的IP地址
	 **/
	private $sellerIp;
	
	/** 
	 * 拆单子订单列表，对应的数据是：子订单号的列表。可以不传，但是如果传了则必须符合传递的规则。子订单必须是操作的物流订单的子订单的真子集
	 **/
	private $subTid;
	
	/** 
	 * 淘宝交易ID
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setIsSplit($isSplit)
	{
		$this->isSplit = $isSplit;
		$this->apiParas["is_split"] = $isSplit;
	}

	public function getIsSplit()
	{
		return $this->isSplit;
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

	public function setSubTid($subTid)
	{
		$this->subTid = $subTid;
		$this->apiParas["sub_tid"] = $subTid;
	}

	public function getSubTid()
	{
		return $this->subTid;
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
		return "taobao.logistics.online.confirm";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->outSid,"outSid");
		RequestCheckUtil::checkMaxListSize($this->subTid,20,"subTid");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
