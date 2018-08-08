<?php
/**
 * TOP API: tmall.item.desc.modules.get request
 * 
 * @author auto create
 * @since 1.0, 2013.07.09
 */
class TmallItemDescModulesGetRequest
{
	/** 
	 * 淘宝后台发布商品的叶子类目id，可通过taobao.itemcats.get查到。api 访问地址http://api.taobao.com/apidoc/api.htm?spm=0.0.0.0.CFhhk4&path=cid:3-apiId:122
	 **/
	private $catId;
	
	/** 
	 * 商家主帐号id
	 **/
	private $usrId;
	
	private $apiParas = array();
	
	public function setCatId($catId)
	{
		$this->catId = $catId;
		$this->apiParas["cat_id"] = $catId;
	}

	public function getCatId()
	{
		return $this->catId;
	}

	public function setUsrId($usrId)
	{
		$this->usrId = $usrId;
		$this->apiParas["usr_id"] = $usrId;
	}

	public function getUsrId()
	{
		return $this->usrId;
	}

	public function getApiMethodName()
	{
		return "tmall.item.desc.modules.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->catId,"catId");
		RequestCheckUtil::checkNotNull($this->usrId,"usrId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
