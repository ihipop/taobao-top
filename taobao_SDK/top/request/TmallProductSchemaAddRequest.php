<?php
/**
 * TOP API: tmall.product.schema.add request
 * 
 * @author auto create
 * @since 1.0, 2015.10.15
 */
class TmallProductSchemaAddRequest
{
	/** 
	 * 品牌ID
	 **/
	private $brandId;
	
	/** 
	 * 商品发布的目标类目，必须是叶子类目
	 **/
	private $categoryId;
	
	/** 
	 * 根据tmall.product.add.schema.get生成的产品发布规则入参数据
	 **/
	private $xmlData;
	
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
		return "tmall.product.schema.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->categoryId,"categoryId");
		RequestCheckUtil::checkNotNull($this->xmlData,"xmlData");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
