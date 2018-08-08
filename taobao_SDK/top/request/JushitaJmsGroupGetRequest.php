<?php
/**
 * TOP API: taobao.jushita.jms.group.get request
 * 
 * @author auto create
 * @since 1.0, 2016.01.13
 */
class JushitaJmsGroupGetRequest
{
	/** 
	 * 要查询分组的名称，多个分组用半角逗号分隔，不传代表查询所有分组信息，但不会返回组下面的用户信息。如果应用没有设置分组则返回空。组名不能以default开头，default开头是系统默认的组。
	 **/
	private $groupNames;
	
	/** 
	 * 页码
	 **/
	private $pageNo;
	
	/** 
	 * 每页返回多少个分组
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setGroupNames($groupNames)
	{
		$this->groupNames = $groupNames;
		$this->apiParas["group_names"] = $groupNames;
	}

	public function getGroupNames()
	{
		return $this->groupNames;
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

	public function getApiMethodName()
	{
		return "taobao.jushita.jms.group.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->groupNames,20,"groupNames");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
