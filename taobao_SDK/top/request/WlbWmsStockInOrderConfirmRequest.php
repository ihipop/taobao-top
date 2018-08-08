<?php
/**
 * TOP API: taobao.wlb.wms.stock.in.order.confirm request
 * 
 * @author auto create
 * @since 1.0, 2015.09.17
 */
class WlbWmsStockInOrderConfirmRequest
{
	/** 
	 * 入库订单确认请求
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
		return "taobao.wlb.wms.stock.in.order.confirm";
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
