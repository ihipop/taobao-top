<?php
/**
 * TOP API: cainiao.bms.order.consign.confirm request
 * 
 * @author auto create
 * @since 1.0, 2017.05.23
 */
class CainiaoBmsOrderConsignConfirmRequest
{
	/** 
	 * 通知消息主体
	 **/
	private $content;
	
	private $apiParas = array();
	
	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function getApiMethodName()
	{
		return "cainiao.bms.order.consign.confirm";
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
