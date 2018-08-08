<?php
/**
 * TOP API: taobao.shop.getbytitle request
 * 
 * @author auto create
 * @since 1.0, 2015.04.21
 */
class ShopGetbytitleRequest
{
	/** 
	 * 代表需要获取的店铺信息：sid,cid,title,nick,desc,bulletin,pic_path,created,modified,shop_score
	 **/
	private $fields;
	
	/** 
	 * 店铺名称，必须严格匹配（不支持模糊查询）
	 **/
	private $title;
	
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

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getApiMethodName()
	{
		return "taobao.shop.getbytitle";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->fields,20,"fields");
		RequestCheckUtil::checkNotNull($this->title,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
