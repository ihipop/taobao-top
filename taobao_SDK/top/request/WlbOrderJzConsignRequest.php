<?php
/**
 * TOP API: taobao.wlb.order.jz.consign request
 * 
 * @author auto create
 * @since 1.0, 2016.02.23
 */
class WlbOrderJzConsignRequest
{
	/** 
	 * 安装收货人信息,如果为空,则取默认收货人信息
	 **/
	private $insReceiverTo;
	
	/** 
	 * 安装公司信息,需要安装时,才填写
	 **/
	private $insTpDto;
	
	/** 
	 * 家装收货人信息,如果为空,则取默认收货信息
	 **/
	private $jzReceiverTo;
	
	/** 
	 * 发货参数
	 **/
	private $jzTopArgs;
	
	/** 
	 * 物流公司信息
	 **/
	private $lgTpDto;
	
	/** 
	 * 卖家联系人地址库ID，可以通过taobao.logistics.address.search接口查询到地址库ID。如果为空，取的卖家的默认取货地址
	 **/
	private $senderId;
	
	/** 
	 * 交易号
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setInsReceiverTo($insReceiverTo)
	{
		$this->insReceiverTo = $insReceiverTo;
		$this->apiParas["ins_receiver_to"] = $insReceiverTo;
	}

	public function getInsReceiverTo()
	{
		return $this->insReceiverTo;
	}

	public function setInsTpDto($insTpDto)
	{
		$this->insTpDto = $insTpDto;
		$this->apiParas["ins_tp_dto"] = $insTpDto;
	}

	public function getInsTpDto()
	{
		return $this->insTpDto;
	}

	public function setJzReceiverTo($jzReceiverTo)
	{
		$this->jzReceiverTo = $jzReceiverTo;
		$this->apiParas["jz_receiver_to"] = $jzReceiverTo;
	}

	public function getJzReceiverTo()
	{
		return $this->jzReceiverTo;
	}

	public function setJzTopArgs($jzTopArgs)
	{
		$this->jzTopArgs = $jzTopArgs;
		$this->apiParas["jz_top_args"] = $jzTopArgs;
	}

	public function getJzTopArgs()
	{
		return $this->jzTopArgs;
	}

	public function setLgTpDto($lgTpDto)
	{
		$this->lgTpDto = $lgTpDto;
		$this->apiParas["lg_tp_dto"] = $lgTpDto;
	}

	public function getLgTpDto()
	{
		return $this->lgTpDto;
	}

	public function setSenderId($senderId)
	{
		$this->senderId = $senderId;
		$this->apiParas["sender_id"] = $senderId;
	}

	public function getSenderId()
	{
		return $this->senderId;
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
		return "taobao.wlb.order.jz.consign";
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
