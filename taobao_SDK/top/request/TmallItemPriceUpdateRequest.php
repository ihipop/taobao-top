<?php
/**
 * TOP API: tmall.item.price.update request
 * 
 * @author auto create
 * @since 1.0, 2017.01.03
 */
class TmallItemPriceUpdateRequest
{
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	/** 
	 * 被更新商品价格
	 **/
	private $itemPrice;
	
	/** 
	 * 商品价格更新时候的可选参数
	 **/
	private $options;
	
	/** 
	 * 更新SKU价格时候的SKU价格对象；如果没有SKU或者不更新SKU价格，可以不填;查找SKU目前支持ID，属性串和商家编码三种模式，建议选用一种最合适的，切勿滥用，一次调用中如果混合使用，更新结果不可预期！
	 **/
	private $skuPrices;
	
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

	public function setItemPrice($itemPrice)
	{
		$this->itemPrice = $itemPrice;
		$this->apiParas["item_price"] = $itemPrice;
	}

	public function getItemPrice()
	{
		return $this->itemPrice;
	}

	public function setOptions($options)
	{
		$this->options = $options;
		$this->apiParas["options"] = $options;
	}

	public function getOptions()
	{
		return $this->options;
	}

	public function setSkuPrices($skuPrices)
	{
		$this->skuPrices = $skuPrices;
		$this->apiParas["sku_prices"] = $skuPrices;
	}

	public function getSkuPrices()
	{
		return $this->skuPrices;
	}

	public function getApiMethodName()
	{
		return "tmall.item.price.update";
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
