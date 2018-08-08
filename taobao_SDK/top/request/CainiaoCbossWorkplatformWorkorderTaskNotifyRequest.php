<?php
/**
 * TOP API: cainiao.cboss.workplatform.workorder.task.notify request
 * 
 * @author auto create
 * @since 1.0, 2016.06.14
 */
class CainiaoCbossWorkplatformWorkorderTaskNotifyRequest
{
	/** 
	 * content
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
		return "cainiao.cboss.workplatform.workorder.task.notify";
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
