<?php
/**
 * TOP API: taobao.itemcats.get request
 * 
 * @author auto create
 * @since 1.0, 2016.04.05
 */
class ItemcatsGetRequest
{
	/** 
	 * 商品所属类目ID列表，用半角逗号(,)分隔 例如:(18957,19562,) (cids、parent_cid至少传一个)
	 **/
	private $cids;
	
	/** 
	 * 无效字段，暂无法使用。时间戳（格式:yyyy-MM-dd HH:mm:ss）如果该字段没有传，则取当前所有的类目信息,如果传了parent_cid或者cids，则忽略datetime，如果该字段传了，那么可以查询到该时间到现在为止的增量变化
	 **/
	private $datetime;
	
	/** 
	 * 需要返回的字段列表，见ItemCat，默认返回：cid,parent_cid,name,is_parent；增量类目信息,根据fields传入的参数返回相应的结果。 features字段： 1、如果存在attr_key=freeze表示该类目被冻结了，attr_value=0,5，value可能存在2个值（也可能只有1个），用逗号分割，0表示禁编辑，5表示禁止发布
	 **/
	private $fields;
	
	/** 
	 * 父商品类目 id，0表示根节点, 传输该参数返回所有子类目。 (cids、parent_cid至少传一个)
	 **/
	private $parentCid;
	
	private $apiParas = array();
	
	public function setCids($cids)
	{
		$this->cids = $cids;
		$this->apiParas["cids"] = $cids;
	}

	public function getCids()
	{
		return $this->cids;
	}

	public function setDatetime($datetime)
	{
		$this->datetime = $datetime;
		$this->apiParas["datetime"] = $datetime;
	}

	public function getDatetime()
	{
		return $this->datetime;
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

	public function setParentCid($parentCid)
	{
		$this->parentCid = $parentCid;
		$this->apiParas["parent_cid"] = $parentCid;
	}

	public function getParentCid()
	{
		return $this->parentCid;
	}

	public function getApiMethodName()
	{
		return "taobao.itemcats.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->cids,1000,"cids");
		RequestCheckUtil::checkMaxListSize($this->fields,20,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
