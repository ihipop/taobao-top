<?php
/**
 * TOP API: tmall.product.add.schema.get request
 * 
 * @author auto create
 * @since 1.0, 2016.04.13
 */
class TmallProductAddSchemaGetRequest
{
	/** 
	 * 品牌ID
	 **/
	private $brandId;
	
	/** 
	 * 商品发布的目标类目，必须是叶子类目
	 **/
	private $categoryId;
	
	private $apiParas = array();
	
	public function setBrandId($brandId)
	{
		$this->brandId = $brandId;
		$this->apiParas["brand_id"] = $brandId;
	}

	public function getBrandId()
	{
		return $this->brandId;
	}

	public function setCategoryId($categoryId)
	{
		$this->categoryId = $categoryId;
		$this->apiParas["category_id"] = $categoryId;
	}

	public function getCategoryId()
	{
		return $this->categoryId;
	}

	public function getApiMethodName()
	{
		return "tmall.product.add.schema.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->categoryId,"categoryId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
