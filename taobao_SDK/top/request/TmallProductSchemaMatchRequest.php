<?php
/**
 * TOP API: tmall.product.schema.match request
 * 
 * @author auto create
 * @since 1.0, 2016.04.13
 */
class TmallProductSchemaMatchRequest
{
	/** 
	 * 商品发布的目标类目，必须是叶子类目
	 **/
	private $categoryId;
	
	/** 
	 * 根据tmall.product.match.schema.get获取到的模板，ISV将需要的字段填充好相应的值结果XML。
	 **/
	private $propvalues;
	
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

	public function setPropvalues($propvalues)
	{
		$this->propvalues = $propvalues;
		$this->apiParas["propvalues"] = $propvalues;
	}

	public function getPropvalues()
	{
		return $this->propvalues;
	}

	public function getApiMethodName()
	{
		return "tmall.product.schema.match";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->categoryId,"categoryId");
		RequestCheckUtil::checkNotNull($this->propvalues,"propvalues");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
