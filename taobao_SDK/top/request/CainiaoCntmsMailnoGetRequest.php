<?php
/**
 * TOP API: cainiao.cntms.mailno.get request
 * 
 * @author auto create
 * @since 1.0, 2017.06.23
 */
class CainiaoCntmsMailnoGetRequest
{
	/** 
	 * 获取菜鸟配送电子面单请求参数
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
		return "cainiao.cntms.mailno.get";
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
