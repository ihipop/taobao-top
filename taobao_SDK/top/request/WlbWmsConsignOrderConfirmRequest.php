<?php
/**
 * TOP API: taobao.wlb.wms.consign.order.confirm request
 * 
 * @author auto create
 * @since 1.0, 2016.03.04
 */
class WlbWmsConsignOrderConfirmRequest
{
	/** 
	 * 发货订单信息
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
		return "taobao.wlb.wms.consign.order.confirm";
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
