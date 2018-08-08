<?php
/**
 * TOP API: tmall.item.add.schema.get request
 * 
 * @author auto create
 * @since 1.0, 2015.09.11
 */
class TmallItemAddSchemaGetRequest
{
	/** 
	 * 商品发布的目标类目，必须是叶子类目
	 **/
	private $categoryId;
	
	/** 
	 * 正常接口调用时，请忽略这个参数或者填FALSE。这个参数提供给ISV对接Schema时，如果想先获取了解所有字段和规则，可以将此字段设置为true，product_id也就不需要提供了，设置为0即可
	 **/
	private $isvInit;
	
	/** 
	 * 商品发布的目标product_id
	 **/
	private $productId;
	
	/** 
	 * 发布商品类型，一口价填“b”，拍卖填"a"
	 **/
	private $type;
	
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

	public function setIsvInit($isvInit)
	{
		$this->isvInit = $isvInit;
		$this->apiParas["isv_init"] = $isvInit;
	}

	public function getIsvInit()
	{
		return $this->isvInit;
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

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "tmall.item.add.schema.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->categoryId,"categoryId");
		RequestCheckUtil::checkNotNull($this->productId,"productId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
