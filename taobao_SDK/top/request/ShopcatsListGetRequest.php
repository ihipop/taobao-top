<?php
/**
 * TOP API: taobao.shopcats.list.get request
 * 
 * @author auto create
 * @since 1.0, 2016.03.19
 */
class ShopcatsListGetRequest
{
	/** 
	 * 需要返回的字段列表，见ShopCat，默认返回：cid,parent_cid,name,is_parent
	 **/
	private $fields;
	
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

	public function getApiMethodName()
	{
		return "taobao.shopcats.list.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->fields,20,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
