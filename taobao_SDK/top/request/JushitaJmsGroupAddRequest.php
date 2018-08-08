<?php
/**
 * TOP API: taobao.jushita.jms.group.add request
 * 
 * @author auto create
 * @since 1.0, 2016.01.13
 */
class JushitaJmsGroupAddRequest
{
	/** 
	 * 分组名称，同一个应用下需要保证唯一性，最长32个字符。添加分组后，消息通道会为用户的消息分配独立分组，但之前的消息还是存储于默认分组中。不能以default开头，default开头为系统默认组。
	 **/
	private $groupName;
	
	/** 
	 * 用户昵称列表，以半角逗号分隔，支持子账号，支持增量添加用户
	 **/
	private $userNicks;
	
	/** 
	 * 用户所属于的平台类型，tbUIC:淘宝用户; icbu: icbu用户
	 **/
	private $userPlatform;
	
	private $apiParas = array();
	
	public function setGroupName($groupName)
	{
		$this->groupName = $groupName;
		$this->apiParas["group_name"] = $groupName;
	}

	public function getGroupName()
	{
		return $this->groupName;
	}

	public function setUserNicks($userNicks)
	{
		$this->userNicks = $userNicks;
		$this->apiParas["user_nicks"] = $userNicks;
	}

	public function getUserNicks()
	{
		return $this->userNicks;
	}

	public function setUserPlatform($userPlatform)
	{
		$this->userPlatform = $userPlatform;
		$this->apiParas["user_platform"] = $userPlatform;
	}

	public function getUserPlatform()
	{
		return $this->userPlatform;
	}

	public function getApiMethodName()
	{
		return "taobao.jushita.jms.group.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupName,"groupName");
		RequestCheckUtil::checkNotNull($this->userNicks,"userNicks");
		RequestCheckUtil::checkMaxListSize($this->userNicks,20,"userNicks");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
