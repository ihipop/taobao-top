<?php
/**
 * TOP API: taobao.item.img.delete request
 * 
 * @author auto create
 * @since 1.0, 2015.05.08
 */
class ItemImgDeleteRequest
{
	/** 
	 * 商品图片ID
	 **/
	private $id;
	
	/** 
	 * 标记是否要删除第6张图，因为第6张图与普通商品图片不是存储在同一个位置的无图片ID，所以要通过一个标记来判断是否为第6张图，目前第6张图业务主要用在女装业务下
	 **/
	private $isSixthPic;
	
	/** 
	 * 商品数字ID
	 **/
	private $numIid;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setIsSixthPic($isSixthPic)
	{
		$this->isSixthPic = $isSixthPic;
		$this->apiParas["is_sixth_pic"] = $isSixthPic;
	}

	public function getIsSixthPic()
	{
		return $this->isSixthPic;
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
		return "taobao.item.img.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkMinValue($this->id,1,"id");
		RequestCheckUtil::checkNotNull($this->numIid,"numIid");
		RequestCheckUtil::checkMinValue($this->numIid,1,"numIid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
