<?php
/**
 * TOP API: taobao.wlb.order.jz.query request
 * 
 * @author auto create
 * @since 1.0, 2015.12.17
 */
class WlbOrderJzQueryRequest
{
	/** 
	 * 家装安装服务收货人信息
	 **/
	private $insJzReceiverTO;
	
	/** 
	 * 家装收货人信息
	 **/
	private $jzReceiverTo;
	
	/** 
	 * 卖家联系人地址库ID，可以通过taobao.logistics.address.search接口查询到地址库ID。如果为空，取的卖家的默认取货地址
	 **/
	private $senderId;
	
	/** 
	 * 交易id
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setInsJzReceiverTO($insJzReceiverTO)
	{
		$this->insJzReceiverTO = $insJzReceiverTO;
		$this->apiParas["ins_jz_receiver_t_o"] = $insJzReceiverTO;
	}

	public function getInsJzReceiverTO()
	{
		return $this->insJzReceiverTO;
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
		return "taobao.wlb.order.jz.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
