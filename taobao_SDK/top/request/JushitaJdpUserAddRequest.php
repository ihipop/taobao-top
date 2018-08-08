<?php
/**
 * TOP API: taobao.jushita.jdp.user.add request
 * 
 * @author auto create
 * @since 1.0, 2017.01.20
 */
class JushitaJdpUserAddRequest
{
	/** 
	 * 推送历史数据天数，只能为90天内，包含90天。当此参数不填时，表示以页面中应用配置的历史天数为准；如果为0表示这个用户不推送历史数据；其它表示推送的历史天数。
	 **/
	private $historyDays;
	
	/** 
	 * 已废弃，新版订单同步服务不要使用。同步用户数据的机器IP,必须是界面配置的IP。
	 **/
	private $hostIp;
	
	/** 
	 * 已废弃，新版订单同步服务不要使用。绑定类型，用户数据同步的机器名称。
	 **/
	private $hostName;
	
	/** 
	 * RDS实例名称
	 **/
	private $rdsName;
	
	/** 
	 * 已废弃，使用页面中应用的配置。用户同步的数据类型,多个用','号分割。可选值：trade,refund,item
	 **/
	private $topics;
	
	private $apiParas = array();
	
	public function setHistoryDays($historyDays)
	{
		$this->historyDays = $historyDays;
		$this->apiParas["history_days"] = $historyDays;
	}

	public function getHistoryDays()
	{
		return $this->historyDays;
	}

	public function setHostIp($hostIp)
	{
		$this->hostIp = $hostIp;
		$this->apiParas["host_ip"] = $hostIp;
	}

	public function getHostIp()
	{
		return $this->hostIp;
	}

	public function setHostName($hostName)
	{
		$this->hostName = $hostName;
		$this->apiParas["host_name"] = $hostName;
	}

	public function getHostName()
	{
		return $this->hostName;
	}

	public function setRdsName($rdsName)
	{
		$this->rdsName = $rdsName;
		$this->apiParas["rds_name"] = $rdsName;
	}

	public function getRdsName()
	{
		return $this->rdsName;
	}

	public function setTopics($topics)
	{
		$this->topics = $topics;
		$this->apiParas["topics"] = $topics;
	}

	public function getTopics()
	{
		return $this->topics;
	}

	public function getApiMethodName()
	{
		return "taobao.jushita.jdp.user.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->historyDays,90,"historyDays");
		RequestCheckUtil::checkMinValue($this->historyDays,0,"historyDays");
		RequestCheckUtil::checkMaxLength($this->hostName,60,"hostName");
		RequestCheckUtil::checkNotNull($this->rdsName,"rdsName");
		RequestCheckUtil::checkMaxListSize($this->topics,16,"topics");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
