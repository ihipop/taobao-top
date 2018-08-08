<?php
/**
 * TOP API: tmall.item.outerid.update request
 * 
 * @author auto create
 * @since 1.0, 2017.01.04
 */
class TmallItemOuteridUpdateRequest
{
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	/** 
	 * 商品维度商家编码，如果不修改可以不传；清空请设置空串
	 **/
	private $outerId;
	
	/** 
	 * 商品SKU更新OuterId时候用的数据
	 **/
	private $skuOuters;
	
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

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setSkuOuters($skuOuters)
	{
		$this->skuOuters = $skuOuters;
		$this->apiParas["sku_outers"] = $skuOuters;
	}

	public function getSkuOuters()
	{
		return $this->skuOuters;
	}

	public function getApiMethodName()
	{
		return "tmall.item.outerid.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
