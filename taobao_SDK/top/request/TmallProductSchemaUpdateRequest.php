<?php
/**
 * TOP API: tmall.product.schema.update request
 * 
 * @author auto create
 * @since 1.0, 2015.10.15
 */
class TmallProductSchemaUpdateRequest
{
	/** 
	 * 产品编号
	 **/
	private $productId;
	
	/** 
	 * 根据tmall.product.update.schema.get生成的产品更新规则入参数据
	 **/
	private $xmlData;
	
	private $apiParas = array();
	
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
		return "tmall.product.schema.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->productId,"productId");
		RequestCheckUtil::checkNotNull($this->xmlData,"xmlData");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
