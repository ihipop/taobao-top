<?php
/**
 * TOP API: taobao.item.increment.update.schema.get request
 * 
 * @author auto create
 * @since 1.0, 2015.05.06
 */
class ItemIncrementUpdateSchemaGetRequest
{
	/** 
	 * 宝贝类目id
	 **/
	private $categoryId;
	
	/** 
	 * 宝贝id
	 **/
	private $itemId;
	
	/** 
	 * 修改字段
	 **/
	private $updateFields;
	
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

	public function setUpdateFields($updateFields)
	{
		$this->updateFields = $updateFields;
		$this->apiParas["update_fields"] = $updateFields;
	}

	public function getUpdateFields()
	{
		return $this->updateFields;
	}

	public function getApiMethodName()
	{
		return "taobao.item.increment.update.schema.get";
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
