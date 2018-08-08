<?php
/**
 * TOP API: taobao.item.seller.get request
 * 
 * @author auto create
 * @since 1.0, 2017.05.05
 */
class ItemSellerGetRequest
{
	/** 
	 * 需要返回的商品字段列表。可选值：Item商品结构体中所有字段均可返回，多个字段用“,”分隔。
	 **/
	private $fields;
	
	/** 
	 * 商品数字ID
	 **/
	private $numIid;
	
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

	public function setNumIid($numIid)
	{
		$this->numIid = $numIid;
		$this->apiParas["num_iid"] = $numIid;
	}

	public function getNumIid()
	{
		return $this->numIid;
	}

	public function getApiMethodName()
	{
		return "taobao.item.seller.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->numIid,"numIid");
		RequestCheckUtil::checkMinValue($this->numIid,1,"numIid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
