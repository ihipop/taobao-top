<?php
/**
 * TOP API: taobao.wlb.wms.inventory.lack.upload request
 * 
 * @author auto create
 * @since 1.0, 2015.09.17
 */
class WlbWmsInventoryLackUploadRequest
{
	/** 
	 * 缺货通知信息
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
		return "taobao.wlb.wms.inventory.lack.upload";
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
