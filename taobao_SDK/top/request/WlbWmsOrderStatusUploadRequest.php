<?php
/**
 * TOP API: taobao.wlb.wms.order.status.upload request
 * 
 * @author auto create
 * @since 1.0, 2016.05.19
 */
class WlbWmsOrderStatusUploadRequest
{
	/** 
	 * 订单状态回传请求数据
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
		return "taobao.wlb.wms.order.status.upload";
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
