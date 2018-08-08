<?php
/**
 * TOP API: taobao.item.cspu.move request
 * 
 * @author auto create
 * @since 1.0, 2014.07.21
 */
class ItemCspuMoveRequest
{
	/** 
	 * 商品id，必填
	 **/
	private $itemId;
	
	/** 
	 * 如果商品存在sku信息，必须输入sku和cspu的映射关系，可以支持多个skuID对应一个cspuID。“-1”代替删除sku。反之不能填写
	 **/
	private $skuCspuMapping;
	
	/** 
	 * 商品有SKU信息并且类目配置了营销属性（如套餐），则必须填写sku和套餐的映射关系。并且sku套餐信息和sku_cspu_mapping传入的sku_id信息保持一致。反之，不需要填写，
	 **/
	private $skuMealpropertyMapping;
	
	/** 
	 * 商品需要挂接的目产品ID，如果不填默认不修改产品ID,即商品本身对应的产品ID
	 **/
	private $spuId;
	
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

	public function setSkuCspuMapping($skuCspuMapping)
	{
		$this->skuCspuMapping = $skuCspuMapping;
		$this->apiParas["sku_cspu_mapping"] = $skuCspuMapping;
	}

	public function getSkuCspuMapping()
	{
		return $this->skuCspuMapping;
	}

	public function setSkuMealpropertyMapping($skuMealpropertyMapping)
	{
		$this->skuMealpropertyMapping = $skuMealpropertyMapping;
		$this->apiParas["sku_mealproperty_mapping"] = $skuMealpropertyMapping;
	}

	public function getSkuMealpropertyMapping()
	{
		return $this->skuMealpropertyMapping;
	}

	public function setSpuId($spuId)
	{
		$this->spuId = $spuId;
		$this->apiParas["spu_id"] = $spuId;
	}

	public function getSpuId()
	{
		return $this->spuId;
	}

	public function getApiMethodName()
	{
		return "taobao.item.cspu.move";
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
