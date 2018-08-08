<?php
/**
 * TOP API: cainiao.cboss.workplatform.operation.reply request
 * 
 * @author auto create
 * @since 1.0, 2016.06.14
 */
class CainiaoCbossWorkplatformOperationReplyRequest
{
	/** 
	 * 任务操作时间
	 **/
	private $actionTime;
	
	/** 
	 * 任务操作类型
	 **/
	private $actionType;
	
	/** 
	 * 凭证照片地址拼接
	 **/
	private $attachPath;
	
	/** 
	 * 操作者联系方式
	 **/
	private $dealerContact;
	
	/** 
	 * 操作者userId
	 **/
	private $dealerUserId;
	
	/** 
	 * 扩展字段
	 **/
	private $features;
	
	/** 
	 * 商家工单操作回传备注
	 **/
	private $memo;
	
	/** 
	 * 工单任务id
	 **/
	private $taskId;
	
	/** 
	 * 工单id
	 **/
	private $workOrderId;
	
	private $apiParas = array();
	
	public function setActionTime($actionTime)
	{
		$this->actionTime = $actionTime;
		$this->apiParas["action_time"] = $actionTime;
	}

	public function getActionTime()
	{
		return $this->actionTime;
	}

	public function setActionType($actionType)
	{
		$this->actionType = $actionType;
		$this->apiParas["action_type"] = $actionType;
	}

	public function getActionType()
	{
		return $this->actionType;
	}

	public function setAttachPath($attachPath)
	{
		$this->attachPath = $attachPath;
		$this->apiParas["attach_path"] = $attachPath;
	}

	public function getAttachPath()
	{
		return $this->attachPath;
	}

	public function setDealerContact($dealerContact)
	{
		$this->dealerContact = $dealerContact;
		$this->apiParas["dealer_contact"] = $dealerContact;
	}

	public function getDealerContact()
	{
		return $this->dealerContact;
	}

	public function setDealerUserId($dealerUserId)
	{
		$this->dealerUserId = $dealerUserId;
		$this->apiParas["dealer_user_id"] = $dealerUserId;
	}

	public function getDealerUserId()
	{
		return $this->dealerUserId;
	}

	public function setFeatures($features)
	{
		$this->features = $features;
		$this->apiParas["features"] = $features;
	}

	public function getFeatures()
	{
		return $this->features;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setTaskId($taskId)
	{
		$this->taskId = $taskId;
		$this->apiParas["task_id"] = $taskId;
	}

	public function getTaskId()
	{
		return $this->taskId;
	}

	public function setWorkOrderId($workOrderId)
	{
		$this->workOrderId = $workOrderId;
		$this->apiParas["work_order_id"] = $workOrderId;
	}

	public function getWorkOrderId()
	{
		return $this->workOrderId;
	}

	public function getApiMethodName()
	{
		return "cainiao.cboss.workplatform.operation.reply";
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
