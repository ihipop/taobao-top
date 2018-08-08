<?php
/**
 * TOP API: taobao.wlb.wms.cainiao.bill.query request
 * 
 * @author auto create
 * @since 1.0, 2016.11.14
 */
class WlbWmsCainiaoBillQueryRequest
{
	/** 
	 * 起始时间，此字段检索订单最后修改时间， 格式 yyyy-MM-dd HH:mm:ss。
	 **/
	private $endModifiedTime;
	
	/** 
	 * 订单类型 201 销售出库 501 退货入库 502 换货出库 503 补发出库904 普通入库 903 普通出库单 306 B2B入库单 305 B2B出库单 601 采购入库 901 退供出库单 701 盘点出库 702 盘点入库 711 库存异动单
	 **/
	private $orderType;
	
	/** 
	 * 页码。（大于0的整数。默认为1）
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。（每页条数不超过50条。默认为50）
	 **/
	private $pageSize;
	
	/** 
	 * 结束时间，此字段检索订单最后修改时间， 格式 yyyy-MM-dd HH:mm:ss。
	 **/
	private $startModifiedTime;
	
	private $apiParas = array();
	
	public function setEndModifiedTime($endModifiedTime)
	{
		$this->endModifiedTime = $endModifiedTime;
		$this->apiParas["end_modified_time"] = $endModifiedTime;
	}

	public function getEndModifiedTime()
	{
		return $this->endModifiedTime;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
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

	public function setStartModifiedTime($startModifiedTime)
	{
		$this->startModifiedTime = $startModifiedTime;
		$this->apiParas["start_modified_time"] = $startModifiedTime;
	}

	public function getStartModifiedTime()
	{
		return $this->startModifiedTime;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.wms.cainiao.bill.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endModifiedTime,"endModifiedTime");
		RequestCheckUtil::checkMaxValue($this->pageSize,50,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->startModifiedTime,"startModifiedTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
