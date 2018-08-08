<?php
/**
 * TOP API: taobao.logistics.orders.get request
 * 
 * @author auto create
 * @since 1.0, 2017.04.21
 */
class LogisticsOrdersGetRequest
{
	/** 
	 * 买家昵称
	 **/
	private $buyerNick;
	
	/** 
	 * 创建时间结束
	 **/
	private $endCreated;
	
	/** 
	 * 需返回的字段列表.可选值:Shipping 物流数据结构中的以下字段: <br>
tid,order_code,seller_nick,buyer_nick,delivery_start, delivery_end,out_sid,item_title,receiver_name, created,modified,status,type,freight_payer,seller_confirm,company_name,sub_tids,is_spilt；<br>多个字段之间用","分隔。如tid,seller_nick,buyer_nick,delivery_start。
	 **/
	private $fields;
	
	/** 
	 * 谁承担运费.可选值:buyer(买家),seller(卖家).如:buyer
	 **/
	private $freightPayer;
	
	/** 
	 * 页码.该字段没传 或 值<1 ,则默认page_no为1
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数.该字段没传 或 值<1 ,则默认page_size为40
	 **/
	private $pageSize;
	
	/** 
	 * 收货人姓名
	 **/
	private $receiverName;
	
	/** 
	 * 卖家是否发货.可选值:yes(是),no(否).如:yes
	 **/
	private $sellerConfirm;
	
	/** 
	 * 创建时间开始
	 **/
	private $startCreated;
	
	/** 
	 * 物流状态.查看数据结构 Shipping 中的status字段.
	 **/
	private $status;
	
	/** 
	 * 交易ID.如果加入tid参数的话,不用传其他的参数,若传入tid：非拆单场景，仅会返回一条物流订单信息；拆单场景，会返回多条物流订单信息
	 **/
	private $tid;
	
	/** 
	 * 物流方式.可选值:post(平邮),express(快递),ems(EMS).如:post
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setEndCreated($endCreated)
	{
		$this->endCreated = $endCreated;
		$this->apiParas["end_created"] = $endCreated;
	}

	public function getEndCreated()
	{
		return $this->endCreated;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setFreightPayer($freightPayer)
	{
		$this->freightPayer = $freightPayer;
		$this->apiParas["freight_payer"] = $freightPayer;
	}

	public function getFreightPayer()
	{
		return $this->freightPayer;
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

	public function setReceiverName($receiverName)
	{
		$this->receiverName = $receiverName;
		$this->apiParas["receiver_name"] = $receiverName;
	}

	public function getReceiverName()
	{
		return $this->receiverName;
	}

	public function setSellerConfirm($sellerConfirm)
	{
		$this->sellerConfirm = $sellerConfirm;
		$this->apiParas["seller_confirm"] = $sellerConfirm;
	}

	public function getSellerConfirm()
	{
		return $this->sellerConfirm;
	}

	public function setStartCreated($startCreated)
	{
		$this->startCreated = $startCreated;
		$this->apiParas["start_created"] = $startCreated;
	}

	public function getStartCreated()
	{
		return $this->startCreated;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
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

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.orders.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
