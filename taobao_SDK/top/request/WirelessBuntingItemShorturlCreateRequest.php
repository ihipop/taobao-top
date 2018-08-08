<?php
/**
 * TOP API: taobao.wireless.bunting.item.shorturl.create request
 * 
 * @author auto create
 * @since 1.0, 2014.07.16
 */
class WirelessBuntingItemShorturlCreateRequest
{
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function getApiMethodName()
	{
		return "taobao.wireless.bunting.item.shorturl.create";
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
