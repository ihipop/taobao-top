<?php
/**
 * TOP API: tmall.item.increment.update.schema.get request
 * 
 * @author auto create
 * @since 1.0, 2015.08.03
 */
class TmallItemIncrementUpdateSchemaGetRequest
{
	/** 
	 * 需要编辑的商品ID
	 **/
	private $itemId;
	
	/** 
	 * 如果入参xml_data指定了更新的字段，则只返回指定字段的规则（ISV如果功能性很强，如明确更新Title，请拼装好此字段以提升API整体性能）
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
		return "tmall.item.increment.update.schema.get";
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
