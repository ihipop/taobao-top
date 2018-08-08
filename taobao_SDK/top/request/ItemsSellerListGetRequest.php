<?php
/**
 * TOP API: taobao.items.seller.list.get request
 * 
 * @author auto create
 * @since 1.0, 2017.04.25
 */
class ItemsSellerListGetRequest
{
	/** 
	 * 需要返回的商品字段列表。可选值：点击返回结果中的Item结构体中能展示出来的所有字段，多个字段用“,”分隔。注：返回所有sku信息的字段名称是sku而不是skus。
	 **/
	private $fields;
	
	/** 
	 * 商品ID列表，多个ID用半角逗号隔开，一次最多不超过20个。注：获取不存在的商品ID或获取别人的商品都不会报错，但没有商品数据返回。
	 **/
	private $numIids;
	
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

	public function setNumIids($numIids)
	{
		$this->numIids = $numIids;
		$this->apiParas["num_iids"] = $numIids;
	}

	public function getNumIids()
	{
		return $this->numIids;
	}

	public function getApiMethodName()
	{
		return "taobao.items.seller.list.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->numIids,"numIids");
		RequestCheckUtil::checkMaxListSize($this->numIids,20,"numIids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
