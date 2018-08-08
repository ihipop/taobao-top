<?php
/**
 * TOP API: taobao.jushita.jdp.rdsinfo.get request
 * 
 * @author auto create
 * @since 1.0, 2016.01.26
 */
class JushitaJdpRdsinfoGetRequest
{
	/** 
	 * 查询的appkey
	 **/
	private $targetAppkey;
	
	private $apiParas = array();
	
	public function setTargetAppkey($targetAppkey)
	{
		$this->targetAppkey = $targetAppkey;
		$this->apiParas["target_appkey"] = $targetAppkey;
	}

	public function getTargetAppkey()
	{
		return $this->targetAppkey;
	}

	public function getApiMethodName()
	{
		return "taobao.jushita.jdp.rdsinfo.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->targetAppkey,"targetAppkey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
