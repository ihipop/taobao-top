<?php
/**
 * TOP API: taobao.inventory.ipc.inventorydetail.get request
 * 
 * @author auto create
 * @since 1.0, 2016.03.06
 */
class InventoryIpcInventorydetailGetRequest
{
	/** 
	 * 主订单号，可选
	 **/
	private $bizOrderId;
	
	/** 
	 * 子订单号，可选
	 **/
	private $bizSubOrderId;
	
	/** 
	 * 当前页数
	 **/
	private $pageIndex;
	
	/** 
	 * 一页显示多少条
	 **/
	private $pageSize;
	
	/** 
	 * 仓储商品id
	 **/
	private $scItemId;
	
	/** 
	 * 1:查询预扣  4：查询占用
	 **/
	private $statusQuery;
	
	private $apiParas = array();
	
	public function setBizOrderId($bizOrderId)
	{
		$this->bizOrderId = $bizOrderId;
		$this->apiParas["biz_order_id"] = $bizOrderId;
	}

	public function getBizOrderId()
	{
		return $this->bizOrderId;
	}

	public function setBizSubOrderId($bizSubOrderId)
	{
		$this->bizSubOrderId = $bizSubOrderId;
		$this->apiParas["biz_sub_order_id"] = $bizSubOrderId;
	}

	public function getBizSubOrderId()
	{
		return $this->bizSubOrderId;
	}

	public function setPageIndex($pageIndex)
	{
		$this->pageIndex = $pageIndex;
		$this->apiParas["page_index"] = $pageIndex;
	}

	public function getPageIndex()
	{
		return $this->pageIndex;
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

	public function setScItemId($scItemId)
	{
		$this->scItemId = $scItemId;
		$this->apiParas["sc_item_id"] = $scItemId;
	}

	public function getScItemId()
	{
		return $this->scItemId;
	}

	public function setStatusQuery($statusQuery)
	{
		$this->statusQuery = $statusQuery;
		$this->apiParas["status_query"] = $statusQuery;
	}

	public function getStatusQuery()
	{
		return $this->statusQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.inventory.ipc.inventorydetail.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->bizOrderId,0,"bizOrderId");
		RequestCheckUtil::checkMinValue($this->bizSubOrderId,0,"bizSubOrderId");
		RequestCheckUtil::checkNotNull($this->pageIndex,"pageIndex");
		RequestCheckUtil::checkMinValue($this->pageIndex,0,"pageIndex");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->scItemId,"scItemId");
		RequestCheckUtil::checkNotNull($this->statusQuery,"statusQuery");
		RequestCheckUtil::checkMinValue($this->statusQuery,1,"statusQuery");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
