<?php
/**
 * TOP API: taobao.jushita.jdp.tasks.get request
 * 
 * @author auto create
 * @since 1.0, 2015.12.15
 */
class JushitaJdpTasksGetRequest
{
	/** 
	 * 最大可返回的任务数量
	 **/
	private $fetchNum;
	
	/** 
	 * 普通isv不能传入此参数
	 **/
	private $targetAppkey;
	
	/** 
	 * 任务分组数量，表示把所有任务平均分成x组，在线订购应用此参数必传；非在线订购应用此参数忽略。
	 **/
	private $taskItemNum;
	
	/** 
	 * 指定获取哪些分组的任务，取多个分组有半角逗号分隔，在线订购应用此参数必传；非在线订购应用此参数忽略。其中task_items >= 0且task_items < task_item_num
	 **/
	private $taskItems;
	
	/** 
	 * 任务类型
	 **/
	private $type;
	
	/** 
	 * 需要查询哪些用户的任务，非在线订购应用此参数必传；在线订购应用此参数忽略。
	 **/
	private $userIds;
	
	private $apiParas = array();
	
	public function setFetchNum($fetchNum)
	{
		$this->fetchNum = $fetchNum;
		$this->apiParas["fetch_num"] = $fetchNum;
	}

	public function getFetchNum()
	{
		return $this->fetchNum;
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

	public function setTaskItemNum($taskItemNum)
	{
		$this->taskItemNum = $taskItemNum;
		$this->apiParas["task_item_num"] = $taskItemNum;
	}

	public function getTaskItemNum()
	{
		return $this->taskItemNum;
	}

	public function setTaskItems($taskItems)
	{
		$this->taskItems = $taskItems;
		$this->apiParas["task_items"] = $taskItems;
	}

	public function getTaskItems()
	{
		return $this->taskItems;
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

	public function setUserIds($userIds)
	{
		$this->userIds = $userIds;
		$this->apiParas["user_ids"] = $userIds;
	}

	public function getUserIds()
	{
		return $this->userIds;
	}

	public function getApiMethodName()
	{
		return "taobao.jushita.jdp.tasks.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->fetchNum,200,"fetchNum");
		RequestCheckUtil::checkMinValue($this->fetchNum,1,"fetchNum");
		RequestCheckUtil::checkMinValue($this->taskItemNum,1,"taskItemNum");
		RequestCheckUtil::checkMaxListSize($this->taskItems,500,"taskItems");
		RequestCheckUtil::checkNotNull($this->type,"type");
		RequestCheckUtil::checkMinValue($this->type,0,"type");
		RequestCheckUtil::checkMaxListSize($this->userIds,200,"userIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
