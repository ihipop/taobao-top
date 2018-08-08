<?php
/**
 * TOP API: taobao.jushita.jdp.common.query request
 * 
 * @author auto create
 * @since 1.0, 2014.12.10
 */
class JushitaJdpCommonQueryRequest
{
	/** 
	 * 查询名称
	 **/
	private $cmdName;
	
	/** 
	 * json参数
	 **/
	private $params;
	
	private $apiParas = array();
	
	public function setCmdName($cmdName)
	{
		$this->cmdName = $cmdName;
		$this->apiParas["cmd_name"] = $cmdName;
	}

	public function getCmdName()
	{
		return $this->cmdName;
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

	public function getApiMethodName()
	{
		return "taobao.jushita.jdp.common.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cmdName,"cmdName");
		RequestCheckUtil::checkNotNull($this->params,"params");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
