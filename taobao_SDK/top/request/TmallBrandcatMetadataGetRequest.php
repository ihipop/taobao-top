<?php
/**
 * TOP API: tmall.brandcat.metadata.get request
 * 
 * @author auto create
 * @since 1.0, 2016.04.14
 */
class TmallBrandcatMetadataGetRequest
{
	/** 
	 * 品牌id
	 **/
	private $brandId;
	
	/** 
	 * 叶子类目id
	 **/
	private $catId;
	
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

	public function setCatId($catId)
	{
		$this->catId = $catId;
		$this->apiParas["cat_id"] = $catId;
	}

	public function getCatId()
	{
		return $this->catId;
	}

	public function getApiMethodName()
	{
		return "tmall.brandcat.metadata.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->catId,"catId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
