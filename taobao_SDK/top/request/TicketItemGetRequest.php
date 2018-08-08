<?php
/**
 * TOP API: taobao.ticket.item.get request
 * 
 * @author auto create
 * @since 1.0, 2016.04.15
 */
class TicketItemGetRequest
{
	/** 
	 * 需要返回的门票商品（TicketItem）对象字段，如title,price,skus等。<br>可选值：TicketItem商品结构体中所有字段均可返回；多个字段用“,”分隔。
	 **/
	private $fields;
	
	/** 
	 * 新门票类目商品的标识（非日历价格库存商品）
	 **/
	private $itemId;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
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

	public function getApiMethodName()
	{
		return "taobao.ticket.item.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
