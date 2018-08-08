<?php
/**
 * TOP API: taobao.wlb.order.jzwithins.consign request
 * 
 * @author auto create
 * @since 1.0, 2015.03.11
 */
class WlbOrderJzwithinsConsignRequest
{
	/** 
	 * 物流服务商信息
	 **/
	private $insPartner;
	
	/** 
	 * 家装物流发货参数
	 **/
	private $jzConsignArgs;
	
	/** 
	 * 淘宝交易订单号
	 **/
	private $tid;
	
	/** 
	 * 物流服务商信息
	 **/
	private $tmsPartner;
	
	private $apiParas = array();
	
	public function setInsPartner($insPartner)
	{
		$this->insPartner = $insPartner;
		$this->apiParas["ins_partner"] = $insPartner;
	}

	public function getInsPartner()
	{
		return $this->insPartner;
	}

	public function setJzConsignArgs($jzConsignArgs)
	{
		$this->jzConsignArgs = $jzConsignArgs;
		$this->apiParas["jz_consign_args"] = $jzConsignArgs;
	}

	public function getJzConsignArgs()
	{
		return $this->jzConsignArgs;
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

	public function setTmsPartner($tmsPartner)
	{
		$this->tmsPartner = $tmsPartner;
		$this->apiParas["tms_partner"] = $tmsPartner;
	}

	public function getTmsPartner()
	{
		return $this->tmsPartner;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.order.jzwithins.consign";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
