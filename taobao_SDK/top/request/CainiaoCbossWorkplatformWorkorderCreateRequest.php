<?php
/**
 * TOP API: cainiao.cboss.workplatform.workorder.create request
 * 
 * @author auto create
 * @since 1.0, 2016.06.22
 */
class CainiaoCbossWorkplatformWorkorderCreateRequest
{
	/** 
	 * 凭证地址列表
	 **/
	private $attachPathList;
	
	/** 
	 * 外部业务系统主键
	 **/
	private $bizEntityValue;
	
	/** 
	 * 业务类型
	 **/
	private $bizType;
	
	/** 
	 * 创建者淘宝id（区分子账号）
	 **/
	private $creatorId;
	
	/** 
	 * 创建者角色
	 **/
	private $creatorRole;
	
	/** 
	 * 扩展字段
	 **/
	private $features;
	
	/** 
	 * 运单号
	 **/
	private $mailNo;
	
	/** 
	 * 货主商家用户id
	 **/
	private $memberId;
	
	/** 
	 * 货主用户角色
	 **/
	private $memberRole;
	
	/** 
	 * 工单创建备注
	 **/
	private $memo;
	
	/** 
	 * 店铺用户id
	 **/
	private $shopUserId;
	
	/** 
	 * 工单来源
	 **/
	private $source;
	
	/** 
	 * 来源签名，用于唯一区分不同的来源方
	 **/
	private $sourceSign;
	
	/** 
	 * 交易订单id
	 **/
	private $tradeId;
	
	/** 
	 * 工单类型
	 **/
	private $workOrderType;
	
	private $apiParas = array();
	
	public function setAttachPathList($attachPathList)
	{
		$this->attachPathList = $attachPathList;
		$this->apiParas["attach_path_list"] = $attachPathList;
	}

	public function getAttachPathList()
	{
		return $this->attachPathList;
	}

	public function setBizEntityValue($bizEntityValue)
	{
		$this->bizEntityValue = $bizEntityValue;
		$this->apiParas["biz_entity_value"] = $bizEntityValue;
	}

	public function getBizEntityValue()
	{
		return $this->bizEntityValue;
	}

	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setCreatorId($creatorId)
	{
		$this->creatorId = $creatorId;
		$this->apiParas["creator_id"] = $creatorId;
	}

	public function getCreatorId()
	{
		return $this->creatorId;
	}

	public function setCreatorRole($creatorRole)
	{
		$this->creatorRole = $creatorRole;
		$this->apiParas["creator_role"] = $creatorRole;
	}

	public function getCreatorRole()
	{
		return $this->creatorRole;
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

	public function setMailNo($mailNo)
	{
		$this->mailNo = $mailNo;
		$this->apiParas["mail_no"] = $mailNo;
	}

	public function getMailNo()
	{
		return $this->mailNo;
	}

	public function setMemberId($memberId)
	{
		$this->memberId = $memberId;
		$this->apiParas["member_id"] = $memberId;
	}

	public function getMemberId()
	{
		return $this->memberId;
	}

	public function setMemberRole($memberRole)
	{
		$this->memberRole = $memberRole;
		$this->apiParas["member_role"] = $memberRole;
	}

	public function getMemberRole()
	{
		return $this->memberRole;
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

	public function setShopUserId($shopUserId)
	{
		$this->shopUserId = $shopUserId;
		$this->apiParas["shop_user_id"] = $shopUserId;
	}

	public function getShopUserId()
	{
		return $this->shopUserId;
	}

	public function setSource($source)
	{
		$this->source = $source;
		$this->apiParas["source"] = $source;
	}

	public function getSource()
	{
		return $this->source;
	}

	public function setSourceSign($sourceSign)
	{
		$this->sourceSign = $sourceSign;
		$this->apiParas["source_sign"] = $sourceSign;
	}

	public function getSourceSign()
	{
		return $this->sourceSign;
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

	public function setWorkOrderType($workOrderType)
	{
		$this->workOrderType = $workOrderType;
		$this->apiParas["work_order_type"] = $workOrderType;
	}

	public function getWorkOrderType()
	{
		return $this->workOrderType;
	}

	public function getApiMethodName()
	{
		return "cainiao.cboss.workplatform.workorder.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->attachPathList,20,"attachPathList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
