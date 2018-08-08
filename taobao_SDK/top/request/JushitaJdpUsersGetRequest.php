<?php
/**
 * TOP API: taobao.jushita.jdp.users.get request
 * 
 * @author auto create
 * @since 1.0, 2015.07.29
 */
class JushitaJdpUsersGetRequest
{
	/** 
	 * 此参数一般不用传，用于查询最后更改时间在某个时间段内的用户
	 **/
	private $endModified;
	
	/** 
	 * 当前页数
	 **/
	private $pageNo;
	
	/** 
	 * 每页记录数，默认200
	 **/
	private $pageSize;
	
	/** 
	 * 此参数一般不用传，用于查询最后更改时间在某个时间段内的用户
	 **/
	private $startModified;
	
	/** 
	 * 普通isv不能传入此参数
	 **/
	private $targetAppkey;
	
	/** 
	 * 如果传了user_id表示单条查询
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setEndModified($endModified)
	{
		$this->endModified = $endModified;
		$this->apiParas["end_modified"] = $endModified;
	}

	public function getEndModified()
	{
		return $this->endModified;
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

	public function setStartModified($startModified)
	{
		$this->startModified = $startModified;
		$this->apiParas["start_modified"] = $startModified;
	}

	public function getStartModified()
	{
		return $this->startModified;
	}

	public function setTargetAppkey($targetAppkey)
	{
		$this->targetAppkey = $targetAppkey;
		$this->apiParas["target_appkey"] = $targetAppkey;
	}

	public function getTargetAppkey()
	{
		return $this->targetAppkey;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.jushita.jdp.users.get";
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
