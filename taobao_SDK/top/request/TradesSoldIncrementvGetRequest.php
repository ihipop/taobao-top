<?php
/**
 * TOP API: taobao.trades.sold.incrementv.get request
 * 
 * @author auto create
 * @since 1.0, 2017.03.10
 */
class TradesSoldIncrementvGetRequest
{
	/** 
	 * 查询入库结束时间，必须大于入库开始时间(修改时间跨度不能大于一天)，格式:yyyy-MM-dd HH:mm:ss。<span style="color:red;font-weight: bold;">建议使用30分钟以内的时间跨度，能大大提高响应速度和成功率</span>。
	 **/
	private $endCreate;
	
	/** 
	 * 可选值有ershou(二手市场的订单）,service（商城服务子订单）mark（双十一大促活动异常订单）作为扩展类型筛选只能做单个ext_type查询，不能全部查询所有的ext_type类型
	 **/
	private $extType;
	
	/** 
	 * 需要返回的字段列表，多个字段用半角逗号分隔，可选值为返回示例中能看到的所有字段。
	 **/
	private $fields;
	
	/** 
	 * 页码。取值范围:大于零的整数;默认值:1。<span style="color:red;font-weight: bold;">注：必须采用倒序的分页方式（从最后一页往回取）才能避免漏单问题。</span>
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围：1~100，默认值：40。<span style="color:red;font-weight: bold;">建议使用40~50，可以提高成功率，减少超时数量</span>。
	 **/
	private $pageSize;
	
	/** 
	 * 查询入库开始时间(修改时间跨度不能大于一天)。格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $startCreate;
	
	/** 
	 * 交易状态（<a href="http://open.taobao.com/doc/detail.htm?id=102856" target="_blank">查看可选值</a>），默认查询所有交易状态的数据，除了默认值外每次只能查询一种状态。
	 **/
	private $status;
	
	/** 
	 * 卖家对交易的自定义分组标签，目前可选值为：time_card（点卡软件代充），fee_card（话费软件代充）
	 **/
	private $tag;
	
	/** 
	 * 交易类型列表（<a href="http://open.taobao.com/doc/detail.htm?id=102855" target="_blank">查看可选值</a>），一次查询多种类型可用半角逗号分隔，默认同时查询guarantee_trade,auto_delivery,ec,cod,step这5种类型的数据。
	 **/
	private $type;
	
	/** 
	 * 是否启用has_next的分页方式，如果指定true,则返回的结果中不包含总记录数，但是会新增一个是否存在下一页的的字段，<span style="color:red;font-weight: bold;">通过此种方式获取增量交易，效率在原有的基础上有80%的提升</span>。
	 **/
	private $useHasNext;
	
	private $apiParas = array();
	
	public function setEndCreate($endCreate)
	{
		$this->endCreate = $endCreate;
		$this->apiParas["end_create"] = $endCreate;
	}

	public function getEndCreate()
	{
		return $this->endCreate;
	}

	public function setExtType($extType)
	{
		$this->extType = $extType;
		$this->apiParas["ext_type"] = $extType;
	}

	public function getExtType()
	{
		return $this->extType;
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

	public function setStartCreate($startCreate)
	{
		$this->startCreate = $startCreate;
		$this->apiParas["start_create"] = $startCreate;
	}

	public function getStartCreate()
	{
		return $this->startCreate;
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

	public function setTag($tag)
	{
		$this->tag = $tag;
		$this->apiParas["tag"] = $tag;
	}

	public function getTag()
	{
		return $this->tag;
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

	public function setUseHasNext($useHasNext)
	{
		$this->useHasNext = $useHasNext;
		$this->apiParas["use_has_next"] = $useHasNext;
	}

	public function getUseHasNext()
	{
		return $this->useHasNext;
	}

	public function getApiMethodName()
	{
		return "taobao.trades.sold.incrementv.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endCreate,"endCreate");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->startCreate,"startCreate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
