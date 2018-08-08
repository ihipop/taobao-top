<?php
/**
 * TOP API: taobao.wlb.wms.sn.info.query request
 * 
 * @author auto create
 * @since 1.0, 2016.03.15
 */
class WlbWmsSnInfoQueryRequest
{
	/** 
	 * 订单编码
	 **/
	private $orderCode;
	
	/** 
	 * 订单类型（1:仓配订单 10：配送扫码 20：增值扫码 40:ERP单号; 50：交易订单 ）
	 **/
	private $orderCodeType;
	
	/** 
	 * 页数，默认每页50条
	 **/
	private $pageIndex;
	
	private $apiParas = array();
	
	public function setOrderCode($orderCode)
	{
		$this->orderCode = $orderCode;
		$this->apiParas["order_code"] = $orderCode;
	}

	public function getOrderCode()
	{
		return $this->orderCode;
	}

	public function setOrderCodeType($orderCodeType)
	{
		$this->orderCodeType = $orderCodeType;
		$this->apiParas["order_code_type"] = $orderCodeType;
	}

	public function getOrderCodeType()
	{
		return $this->orderCodeType;
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

	public function getApiMethodName()
	{
		return "taobao.wlb.wms.sn.info.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderCode,"orderCode");
		RequestCheckUtil::checkNotNull($this->orderCodeType,"orderCodeType");
		RequestCheckUtil::checkNotNull($this->pageIndex,"pageIndex");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
