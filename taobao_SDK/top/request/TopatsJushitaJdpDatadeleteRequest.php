<?php
/**
 * TOP API: taobao.topats.jushita.jdp.datadelete request
 * 
 * @author auto create
 * @since 1.0, 2016.10.31
 */
class TopatsJushitaJdpDatadeleteRequest
{
	/** 
	 * 删除数据时间段的结束修改时间，格式为：yyyy-MM-dd HH:mm:ss，结束时间必须为前天的23:59:59秒以前，根据是业务的modified时间
	 **/
	private $endDate;
	
	/** 
	 * 删除数据时间段的起始修改时间，格式为：yyyy-MM-dd HH:mm:ss,根据是业务的modified时间
	 **/
	private $startDate;
	
	/** 
	 * 推送的数据类型，可选值为：tb_trade(淘宝交易)，tb_item(淘宝商品)，tb_refund(淘宝退款)，fx_trade(分销订单)，同时删除多种类型以分号分隔，如："tb_trade;tb_item;tb_refund;fx_trade"
	 **/
	private $syncTypes;
	
	/** 
	 * 用户昵称，不填表示删除所有用户的数据。
	 **/
	private $userNick;
	
	private $apiParas = array();
	
	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function setSyncTypes($syncTypes)
	{
		$this->syncTypes = $syncTypes;
		$this->apiParas["sync_types"] = $syncTypes;
	}

	public function getSyncTypes()
	{
		return $this->syncTypes;
	}

	public function setUserNick($userNick)
	{
		$this->userNick = $userNick;
		$this->apiParas["user_nick"] = $userNick;
	}

	public function getUserNick()
	{
		return $this->userNick;
	}

	public function getApiMethodName()
	{
		return "taobao.topats.jushita.jdp.datadelete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
		RequestCheckUtil::checkNotNull($this->syncTypes,"syncTypes");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
