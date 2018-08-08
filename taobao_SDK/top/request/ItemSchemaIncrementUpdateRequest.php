<?php
/**
 * TOP API: taobao.item.schema.increment.update request
 * 
 * @author auto create
 * @since 1.0, 2015.05.07
 */
class ItemSchemaIncrementUpdateRequest
{
	/** 
	 * 商品类目id
	 **/
	private $categoryId;
	
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	/** 
	 * 修改字段
	 **/
	private $parameters;
	
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

	public function setParameters($parameters)
	{
		$this->parameters = $parameters;
		$this->apiParas["parameters"] = $parameters;
	}

	public function getParameters()
	{
		return $this->parameters;
	}

	public function getApiMethodName()
	{
		return "taobao.item.schema.increment.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->parameters,"parameters");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
