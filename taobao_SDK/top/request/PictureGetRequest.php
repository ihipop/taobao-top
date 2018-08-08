<?php
/**
 * TOP API: taobao.picture.get request
 * 
 * @author auto create
 * @since 1.0, 2015.07.29
 */
class PictureGetRequest
{
	/** 
	 * 图片使用，如果是pc宝贝detail使用，设置为client:computer，查询出来的图片是符合pc的宝贝detail显示的如果是手机宝贝detail使用，设置为client:phone，查询出来的图片是符合手机的宝贝detail显示的,默认值是全部
	 **/
	private $clientType;
	
	/** 
	 * 是否删除,unfroze代表没有删除
	 **/
	private $deleted;
	
	/** 
	 * 查询上传结束时间点,格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $endDate;
	
	/** 
	 * 是否获取https的链接
	 **/
	private $isHttps;
	
	/** 
	 * 图片被修改的时间点，格式:yyyy-MM-dd HH:mm:ss。查询此修改时间点之后到目前的图片。
	 **/
	private $modifiedTime;
	
	/** 
	 * 图片查询结果排序,time:desc按上传时间从晚到早(默认), time:asc按上传时间从早到晚,sizes:desc按图片从大到小，sizes:asc按图片从小到大,默认time:desc
	 **/
	private $orderBy;
	
	/** 
	 * 页码.传入值为1代表第一页,传入值为2代表第二页,依此类推,默认值为1
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数.每页返回最多返回100条,默认值40
	 **/
	private $pageSize;
	
	/** 
	 * 图片分类ID
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
	 * 图片标题,最大长度50字符,中英文都算一字符
	 **/
	private $title;
	
	/** 
	 * 图片url查询接口
	 **/
	private $urls;
	
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

	public function setIsHttps($isHttps)
	{
		$this->isHttps = $isHttps;
		$this->apiParas["is_https"] = $isHttps;
	}

	public function getIsHttps()
	{
		return $this->isHttps;
	}

	public function setModifiedTime($modifiedTime)
	{
		$this->modifiedTime = $modifiedTime;
		$this->apiParas["modified_time"] = $modifiedTime;
	}

	public function getModifiedTime()
	{
		return $this->modifiedTime;
	}

	public function setOrderBy($orderBy)
	{
		$this->orderBy = $orderBy;
		$this->apiParas["order_by"] = $orderBy;
	}

	public function getOrderBy()
	{
		return $this->orderBy;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
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

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setUrls($urls)
	{
		$this->urls = $urls;
		$this->apiParas["urls"] = $urls;
	}

	public function getUrls()
	{
		return $this->urls;
	}

	public function getApiMethodName()
	{
		return "taobao.picture.get";
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
