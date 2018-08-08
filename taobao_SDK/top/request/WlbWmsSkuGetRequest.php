<?php
/**
 * TOP API: taobao.wlb.wms.sku.get request
 * 
 * @author auto create
 * @since 1.0, 2016.05.24
 */
class WlbWmsSkuGetRequest
{
	/** 
	 * 菜鸟商品ID,与itemcode必须有一个值不为空
	 **/
	private $itemCode;
	
	/** 
	 * 商家商品编码,与itemid必须有一个值不为空
	 **/
	private $itemId;
	
	/** 
	 * 货主ID
	 **/
	private $ownerUserId;
	
	private $apiParas = array();
	
	public function setItemCode($itemCode)
	{
		$this->itemCode = $itemCode;
		$this->apiParas["item_code"] = $itemCode;
	}

	public function getItemCode()
	{
		return $this->itemCode;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setOwnerUserId($ownerUserId)
	{
		$this->ownerUserId = $ownerUserId;
		$this->apiParas["owner_user_id"] = $ownerUserId;
	}

	public function getOwnerUserId()
	{
		return $this->ownerUserId;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.wms.sku.get";
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
