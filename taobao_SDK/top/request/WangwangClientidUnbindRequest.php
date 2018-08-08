<?php
/**
 * TOP API: taobao.wangwang.clientid.unbind request
 * 
 * @author auto create
 * @since 1.0, 2015.06.05
 */
class WangwangClientidUnbindRequest
{
	/** 
	 * 应用名
	 **/
	private $appName;
	
	/** 
	 * 客户端Id
	 **/
	private $clientId;
	
	private $apiParas = array();
	
	public function setAppName($appName)
	{
		$this->appName = $appName;
		$this->apiParas["app_name"] = $appName;
	}

	public function getAppName()
	{
		return $this->appName;
	}

	public function setClientId($clientId)
	{
		$this->clientId = $clientId;
		$this->apiParas["client_id"] = $clientId;
	}

	public function getClientId()
	{
		return $this->clientId;
	}

	public function getApiMethodName()
	{
		return "taobao.wangwang.clientid.unbind";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appName,"appName");
		RequestCheckUtil::checkNotNull($this->clientId,"clientId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
