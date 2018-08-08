<?php
/**
 * TOP API: taobao.oc.tradetags.get request
 * 
 * @author auto create
 * @since 1.0, 2016.07.13
 */
class OcTradetagsGetRequest
{
	/** 
	 * 是否查询历史标签
	 **/
	private $history;
	
	/** 
	 * 不填，则不做标签名称过滤
	 **/
	private $tagNames;
	
	/** 
	 * 不填，则默认只查询1,2。1为官方标，2为自定义标，3为主站只读标签
	 **/
	private $tagTypes;
	
	/** 
	 * 交易主订单id
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setHistory($history)
	{
		$this->history = $history;
		$this->apiParas["history"] = $history;
	}

	public function getHistory()
	{
		return $this->history;
	}

	public function setTagNames($tagNames)
	{
		$this->tagNames = $tagNames;
		$this->apiParas["tag_names"] = $tagNames;
	}

	public function getTagNames()
	{
		return $this->tagNames;
	}

	public function setTagTypes($tagTypes)
	{
		$this->tagTypes = $tagTypes;
		$this->apiParas["tag_types"] = $tagTypes;
	}

	public function getTagTypes()
	{
		return $this->tagTypes;
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
		return "taobao.oc.tradetags.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->tagNames,20,"tagNames");
		RequestCheckUtil::checkMaxListSize($this->tagTypes,20,"tagTypes");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
