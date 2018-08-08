<?php
/**
 * TOP API: tmall.item.schema.update request
 * 
 * @author auto create
 * @since 1.0, 2017.01.03
 */
class TmallItemSchemaUpdateRequest
{
	/** 
	 * 商品发布的目标类目，必须是叶子类目。如果没有切换类目需求不需要填写
	 **/
	private $categoryId;
	
	/** 
	 * 需要编辑的商品ID
	 **/
	private $itemId;
	
	/** 
	 * 商品发布的目标product_id。如果没有切换类目或者切换产品的需求，参数不用填写
	 **/
	private $productId;
	
	/** 
	 * 根据tmall.item.update.schema.get生成的商品编辑规则入参数据
	 **/
	private $xmlData;
	
	private $apiParas = array();
	
	public function setCategoryId($categoryId)
	{
		$this->categoryId = $categoryId;
		$this->apiParas["category_id"] = $categoryId;
	}

	public function getCategoryId()
	{
		return $this->categoryId;
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

	public function setProductId($productId)
	{
		$this->productId = $productId;
		$this->apiParas["product_id"] = $productId;
	}

	public function getProductId()
	{
		return $this->productId;
	}

	public function setXmlData($xmlData)
	{
		$this->xmlData = $xmlData;
		$this->apiParas["xml_data"] = $xmlData;
	}

	public function getXmlData()
	{
		return $this->xmlData;
	}

	public function getApiMethodName()
	{
		return "tmall.item.schema.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->xmlData,"xmlData");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
