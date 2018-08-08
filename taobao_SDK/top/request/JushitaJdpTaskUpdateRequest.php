<?php
/**
 * TOP API: taobao.jushita.jdp.task.update request
 * 
 * @author auto create
 * @since 1.0, 2015.12.16
 */
class JushitaJdpTaskUpdateRequest
{
	/** 
	 * 任务执行失败的错误信息，可以方便排查问题。
	 **/
	private $errorMessage;
	
	/** 
	 * 任务执行的机器主机名,用于方便排查问题。
	 **/
	private $executeHost;
	
	/** 
	 * 任务的编号
	 **/
	private $id;
	
	/** 
	 * 任务的下次开始执行时间。
	 **/
	private $nextExecuteTime;
	
	/** 
	 * 任务当前同步到的时间点。
	 **/
	private $nowSyncTime;
	
	/** 
	 * 任务的参数，用json格式表示
	 **/
	private $params;
	
	/** 
	 * 任务的状态，0表示任务新建或未执行完成，1表示任务停止，2表示任务已经完成，-1表示任务执行失败。
	 **/
	private $status;
	
	/** 
	 * 普通isv不能传入此参数
	 **/
	private $targetAppkey;
	
	/** 
	 * 任务的类型,
	 **/
	private $type;
	
	/** 
	 * 任务更新时的版本号，此值在选择出的任务中获取到。
	 **/
	private $version;
	
	private $apiParas = array();
	
	public function setErrorMessage($errorMessage)
	{
		$this->errorMessage = $errorMessage;
		$this->apiParas["error_message"] = $errorMessage;
	}

	public function getErrorMessage()
	{
		return $this->errorMessage;
	}

	public function setExecuteHost($executeHost)
	{
		$this->executeHost = $executeHost;
		$this->apiParas["execute_host"] = $executeHost;
	}

	public function getExecuteHost()
	{
		return $this->executeHost;
	}

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setNextExecuteTime($nextExecuteTime)
	{
		$this->nextExecuteTime = $nextExecuteTime;
		$this->apiParas["next_execute_time"] = $nextExecuteTime;
	}

	public function getNextExecuteTime()
	{
		return $this->nextExecuteTime;
	}

	public function setNowSyncTime($nowSyncTime)
	{
		$this->nowSyncTime = $nowSyncTime;
		$this->apiParas["now_sync_time"] = $nowSyncTime;
	}

	public function getNowSyncTime()
	{
		return $this->nowSyncTime;
	}

	public function setParams($params)
	{
		$this->params = $params;
		$this->apiParas["params"] = $params;
	}

	public function getParams()
	{
		return $this->params;
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

	public function setTargetAppkey($targetAppkey)
	{
		$this->targetAppkey = $targetAppkey;
		$this->apiParas["target_appkey"] = $targetAppkey;
	}

	public function getTargetAppkey()
	{
		return $this->targetAppkey;
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

	public function setVersion($version)
	{
		$this->version = $version;
		$this->apiParas["version"] = $version;
	}

	public function getVersion()
	{
		return $this->version;
	}

	public function getApiMethodName()
	{
		return "taobao.jushita.jdp.task.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->errorMessage,100,"errorMessage");
		RequestCheckUtil::checkMaxLength($this->executeHost,30,"executeHost");
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->nextExecuteTime,"nextExecuteTime");
		RequestCheckUtil::checkNotNull($this->nowSyncTime,"nowSyncTime");
		RequestCheckUtil::checkMaxLength($this->params,512,"params");
		RequestCheckUtil::checkNotNull($this->status,"status");
		RequestCheckUtil::checkMaxValue($this->status,2,"status");
		RequestCheckUtil::checkMinValue($this->status,-1,"status");
		RequestCheckUtil::checkMinValue($this->type,0,"type");
		RequestCheckUtil::checkNotNull($this->version,"version");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
