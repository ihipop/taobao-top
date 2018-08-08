<?php
/**
 * TOP API: cainiao.waybillprint.clientupdate.getconfig request
 * 
 * @author auto create
 * @since 1.0, 2016.09.09
 */
class CainiaoWaybillprintClientupdateGetconfigRequest
{
	/** 
	 * 服务发起机器局域网ip
	 **/
	private $lanIp;
	
	/** 
	 * 服务发起机器的物理地址
	 **/
	private $mac;
	
	/** 
	 * 当前消息版本
	 **/
	private $msgid;
	
	/** 
	 * 当前打印客户端版本
	 **/
	private $version;
	
	private $apiParas = array();
	
	public function setLanIp($lanIp)
	{
		$this->lanIp = $lanIp;
		$this->apiParas["lan_ip"] = $lanIp;
	}

	public function getLanIp()
	{
		return $this->lanIp;
	}

	public function setMac($mac)
	{
		$this->mac = $mac;
		$this->apiParas["mac"] = $mac;
	}

	public function getMac()
	{
		return $this->mac;
	}

	public function setMsgid($msgid)
	{
		$this->msgid = $msgid;
		$this->apiParas["msgid"] = $msgid;
	}

	public function getMsgid()
	{
		return $this->msgid;
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
		return "cainiao.waybillprint.clientupdate.getconfig";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->lanIp,"lanIp");
		RequestCheckUtil::checkNotNull($this->mac,"mac");
		RequestCheckUtil::checkNotNull($this->msgid,"msgid");
		RequestCheckUtil::checkNotNull($this->version,"version");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
