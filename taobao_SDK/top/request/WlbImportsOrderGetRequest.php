<?php
/**
 * TOP API: taobao.wlb.imports.order.get request
 * 
 * @author auto create
 * @since 1.0, 2016.09.08
 */
class WlbImportsOrderGetRequest
{
	/** 
	 * 交易订单结束创建时间
	 **/
	private $gmtCreateEnd;
	
	/** 
	 * 交易订单开始创建时间
	 **/
	private $gmtCreateStart;
	
	/** 
	 * 页码。取值范围:大于零的整数; 默认值:1
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围:大于0小于等于100的整数; 默认值:40; 最小值：1；最大值:20
	 **/
	private $pageSize;
	
	/** 
	 * 物流订单状态编码。以下依（物流订单状态编码，描述）的形式列举出来：(TIN_CONSING,发货中),(SENT_WAIT_COMPANY_MAKE_SURE,待仓库收货),(ORDER_CANCELED,订单关闭),(COMPANY_MAKE_SURE,海外仓已揽收),(REJECTED_RECEIVED_BY_COMPANY,海外仓拒收),(ORDER_REFUNDING,退货中),(ORDER_REFUND_BY_COMPANY,订单已退货),(EXCEPTION_IN_COMPANY,海外仓内异常),(FAILED_PAID_SHIPPING_FEE,支付失败),(PAID_SHIPPING_FEE,待仓库发货),(COMPANY_CONSIGN_CONFIRM,海外仓已发货),(WAIT_CUSTOMS_MAKE_SURE,清关已收货),(EXCEPTION_IN_CUSTOMS,清关异常),(CUSTOMSING,清关中),(COMPANY_DELIVERY,国内配送)。
	 **/
	private $statusCode;
	
	/** 
	 * 交易订单号
	 **/
	private $tradeId;
	
	private $apiParas = array();
	
	public function setGmtCreateEnd($gmtCreateEnd)
	{
		$this->gmtCreateEnd = $gmtCreateEnd;
		$this->apiParas["gmt_create_end"] = $gmtCreateEnd;
	}

	public function getGmtCreateEnd()
	{
		return $this->gmtCreateEnd;
	}

	public function setGmtCreateStart($gmtCreateStart)
	{
		$this->gmtCreateStart = $gmtCreateStart;
		$this->apiParas["gmt_create_start"] = $gmtCreateStart;
	}

	public function getGmtCreateStart()
	{
		return $this->gmtCreateStart;
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

	public function setStatusCode($statusCode)
	{
		$this->statusCode = $statusCode;
		$this->apiParas["status_code"] = $statusCode;
	}

	public function getStatusCode()
	{
		return $this->statusCode;
	}

	public function setTradeId($tradeId)
	{
		$this->tradeId = $tradeId;
		$this->apiParas["trade_id"] = $tradeId;
	}

	public function getTradeId()
	{
		return $this->tradeId;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.imports.order.get";
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
