<?php
/**
 * TOP API: taobao.wlb.wms.item.combination.get request
 * 
 * @author auto create
 * @since 1.0, 2016.05.17
 */
class WlbWmsItemCombinationGetRequest
{
	/** 
	 * 货品Id
	 **/
	private $itemid;
	
	private $apiParas = array();
	
	public function setItemid($itemid)
	{
		$this->itemid = $itemid;
		$this->apiParas["itemid"] = $itemid;
	}

	public function getItemid()
	{
		return $this->itemid;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.wms.item.combination.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemid,"itemid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
