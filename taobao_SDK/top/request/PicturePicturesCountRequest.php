<?php
/**
 * TOP API: taobao.picture.pictures.count request
 * 
 * @author auto create
 * @since 1.0, 2015.10.13
 */
class PicturePicturesCountRequest
{
	/** 
	 * 图片使用，如果是pc宝贝detail使用，设置为client:computer，查询出来的图片是符合pc的宝贝detail显示的如果是手机宝贝detail使用，设置为client:phone，查询出来的图片是符合手机的宝贝detail显示的,默认值是全部
	 **/
	private $clientType;
	
	/** 
	 * 是否删除,undeleted代表没有删除,deleted表示删除
	 **/
	private $deleted;
	
	/** 
	 * 查询上传结束时间点,格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $endDate;
	
	/** 
	 * 图片分类
	 **/
	private $pictureCategoryId;
	
	/** 
	 * 图片ID
	 **/
	private $pictureId;
	
	/** 
	 * 查询上传开始时间点,格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $startDate;
	
	/** 
	 * 图片被修改的时间点，格式:yyyy-MM-dd HH:mm:ss。查询此修改时间点之后到目前的图片。
	 **/
	private $startModifiedDate;
	
	/** 
	 * 文件名
	 **/
	private $title;
	
	private $apiParas = array();
	
	public function setClientType($clientType)
	{
		$this->clientType = $clientType;
		$this->apiParas["client_type"] = $clientType;
	}

	public function getClientType()
	{
		return $this->clientType;
	}

	public function setDeleted($deleted)
	{
		$this->deleted = $deleted;
		$this->apiParas["deleted"] = $deleted;
	}

	public function getDeleted()
	{
		return $this->deleted;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setPictureCategoryId($pictureCategoryId)
	{
		$this->pictureCategoryId = $pictureCategoryId;
		$this->apiParas["picture_category_id"] = $pictureCategoryId;
	}

	public function getPictureCategoryId()
	{
		return $this->pictureCategoryId;
	}

	public function setPictureId($pictureId)
	{
		$this->pictureId = $pictureId;
		$this->apiParas["picture_id"] = $pictureId;
	}

	public function getPictureId()
	{
		return $this->pictureId;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function setStartModifiedDate($startModifiedDate)
	{
		$this->startModifiedDate = $startModifiedDate;
		$this->apiParas["start_modified_date"] = $startModifiedDate;
	}

	public function getStartModifiedDate()
	{
		return $this->startModifiedDate;
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
		return "taobao.picture.pictures.count";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
