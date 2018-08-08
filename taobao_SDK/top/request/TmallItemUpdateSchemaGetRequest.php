<?php
/**
 * TOP API: tmall.item.update.schema.get request
 * 
 * @author auto create
 * @since 1.0, 2015.09.11
 */
class TmallItemUpdateSchemaGetRequest
{
	/** 
	 * 商品发布的目标类目，必须是叶子类目。如果没有切换类目需求，不需要填写。
	 **/
	private $categoryId;
	
	/** 
	 * 需要编辑的商品ID
	 **/
	private $itemId;
	
	/** 
	 * 商品发布的目标product_id。如果没有切换产品的需求，参数可以不填写。
	 **/
	private $productId;
	
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

	public function getApiMethodName()
	{
		return "tmall.item.update.schema.get";
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
