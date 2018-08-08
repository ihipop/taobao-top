<?php
/**
 * TOP API: taobao.wlb.wms.inventory.profitloss.get request
 * 
 * @author auto create
 * @since 1.0, 2016.11.14
 */
class WlbWmsInventoryProfitlossGetRequest
{
	/** 
	 * 菜鸟订单编码
	 **/
	private $cnOrderCode;
	
	private $apiParas = array();
	
	public function setCnOrderCode($cnOrderCode)
	{
		$this->cnOrderCode = $cnOrderCode;
		$this->apiParas["cn_order_code"] = $cnOrderCode;
	}

	public function getCnOrderCode()
	{
		return $this->cnOrderCode;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.wms.inventory.profitloss.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cnOrderCode,"cnOrderCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
