<?php
/**
 * TOP API: tmall.item.schema.increment.update request
 * 
 * @author auto create
 * @since 1.0, 2017.01.03
 */
class TmallItemSchemaIncrementUpdateRequest
{
	/** 
	 * 需要编辑的商品ID
	 **/
	private $itemId;
	
	/** 
	 * 根据tmall.item.increment.update.schema.get生成的商品增量编辑规则入参数据。需要更新的字段，一定要在入参的XML重点update_fields字段中明确指明
	 **/
	private $xmlData;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
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
		return "tmall.item.schema.increment.update";
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
