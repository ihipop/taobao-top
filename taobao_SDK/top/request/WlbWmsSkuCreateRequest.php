<?php
/**
 * TOP API: taobao.wlb.wms.sku.create request
 * 
 * @author auto create
 * @since 1.0, 2016.05.25
 */
class WlbWmsSkuCreateRequest
{
	/** 
	 * 保质期预警天数
	 **/
	private $adventLifecycle;
	
	/** 
	 * 批准文号
	 **/
	private $approvalNumber;
	
	/** 
	 * 条形码，多条码请用”；”分隔；
	 **/
	private $barCode;
	
	/** 
	 * 品牌编码
	 **/
	private $brand;
	
	/** 
	 * 品牌名称
	 **/
	private $brandName;
	
	/** 
	 * 商品类别编码（外部系统类别）
	 **/
	private $category;
	
	/** 
	 * 商品类别名称
	 **/
	private $categoryName;
	
	/** 
	 * 颜色
	 **/
	private $color;
	
	/** 
	 * 成本价，单位分
	 **/
	private $costPrice;
	
	/** 
	 * 拓展属性
	 **/
	private $extendFields;
	
	/** 
	 * 毛重，单位克
	 **/
	private $grossWeight;
	
	/** 
	 * 高度，单位毫米
	 **/
	private $height;
	
	/** 
	 * 是否区域销售
	 **/
	private $isAreaSale;
	
	/** 
	 * 是否启用批次管理
	 **/
	private $isBatchMgt;
	
	/** 
	 * 是否危险品
	 **/
	private $isDanger;
	
	/** 
	 * 是否易碎品
	 **/
	private $isHygroscopic;
	
	/** 
	 * 是否启用保质期管理
	 **/
	private $isShelflife;
	
	/** 
	 * 是否启用序列号管理
	 **/
	private $isSnMgt;
	
	/** 
	 * 商家商品编码
	 **/
	private $itemCode;
	
	/** 
	 * 商家商品ID
	 **/
	private $itemId;
	
	/** 
	 * 零售价，单位分
	 **/
	private $itemPrice;
	
	/** 
	 * 长度，单位毫米
	 **/
	private $length;
	
	/** 
	 * 商品保质期天数
	 **/
	private $lifecycle;
	
	/** 
	 * 保质期禁售天数
	 **/
	private $lockupLifecycle;
	
	/** 
	 * 商品名称
	 **/
	private $name;
	
	/** 
	 * 净重，单位克
	 **/
	private $netWeight;
	
	/** 
	 * 产地
	 **/
	private $originAddress;
	
	/** 
	 * 箱规
	 **/
	private $pcs;
	
	/** 
	 * 保质期禁收天数
	 **/
	private $rejectLifecycle;
	
	/** 
	 * 尺码
	 **/
	private $size;
	
	/** 
	 * 规格
	 **/
	private $specification;
	
	/** 
	 * 仓库编码
	 **/
	private $storeCode;
	
	/** 
	 * 吊牌价，单位分
	 **/
	private $tagPrice;
	
	/** 
	 * 商品标题
	 **/
	private $title;
	
	/** 
	 * 商品类别NORMAL：普通商品、COMBINE：组合商品、DISTRIBUTION：分销商品、HAOCAI耗材、FUSHUPIN附属品、BAOCAI 包材、XUNI虚拟商品、QITA其他)
	 **/
	private $type;
	
	/** 
	 * 启用标识
	 **/
	private $useYn;
	
	/** 
	 * 体积，单位立方厘米
	 **/
	private $volume;
	
	/** 
	 * 宽度，单位毫米
	 **/
	private $width;
	
	private $apiParas = array();
	
	public function setAdventLifecycle($adventLifecycle)
	{
		$this->adventLifecycle = $adventLifecycle;
		$this->apiParas["advent_lifecycle"] = $adventLifecycle;
	}

	public function getAdventLifecycle()
	{
		return $this->adventLifecycle;
	}

	public function setApprovalNumber($approvalNumber)
	{
		$this->approvalNumber = $approvalNumber;
		$this->apiParas["approval_number"] = $approvalNumber;
	}

	public function getApprovalNumber()
	{
		return $this->approvalNumber;
	}

	public function setBarCode($barCode)
	{
		$this->barCode = $barCode;
		$this->apiParas["bar_code"] = $barCode;
	}

	public function getBarCode()
	{
		return $this->barCode;
	}

	public function setBrand($brand)
	{
		$this->brand = $brand;
		$this->apiParas["brand"] = $brand;
	}

	public function getBrand()
	{
		return $this->brand;
	}

	public function setBrandName($brandName)
	{
		$this->brandName = $brandName;
		$this->apiParas["brand_name"] = $brandName;
	}

	public function getBrandName()
	{
		return $this->brandName;
	}

	public function setCategory($category)
	{
		$this->category = $category;
		$this->apiParas["category"] = $category;
	}

	public function getCategory()
	{
		return $this->category;
	}

	public function setCategoryName($categoryName)
	{
		$this->categoryName = $categoryName;
		$this->apiParas["category_name"] = $categoryName;
	}

	public function getCategoryName()
	{
		return $this->categoryName;
	}

	public function setColor($color)
	{
		$this->color = $color;
		$this->apiParas["color"] = $color;
	}

	public function getColor()
	{
		return $this->color;
	}

	public function setCostPrice($costPrice)
	{
		$this->costPrice = $costPrice;
		$this->apiParas["cost_price"] = $costPrice;
	}

	public function getCostPrice()
	{
		return $this->costPrice;
	}

	public function setExtendFields($extendFields)
	{
		$this->extendFields = $extendFields;
		$this->apiParas["extend_fields"] = $extendFields;
	}

	public function getExtendFields()
	{
		return $this->extendFields;
	}

	public function setGrossWeight($grossWeight)
	{
		$this->grossWeight = $grossWeight;
		$this->apiParas["gross_weight"] = $grossWeight;
	}

	public function getGrossWeight()
	{
		return $this->grossWeight;
	}

	public function setHeight($height)
	{
		$this->height = $height;
		$this->apiParas["height"] = $height;
	}

	public function getHeight()
	{
		return $this->height;
	}

	public function setIsAreaSale($isAreaSale)
	{
		$this->isAreaSale = $isAreaSale;
		$this->apiParas["is_area_sale"] = $isAreaSale;
	}

	public function getIsAreaSale()
	{
		return $this->isAreaSale;
	}

	public function setIsBatchMgt($isBatchMgt)
	{
		$this->isBatchMgt = $isBatchMgt;
		$this->apiParas["is_batch_mgt"] = $isBatchMgt;
	}

	public function getIsBatchMgt()
	{
		return $this->isBatchMgt;
	}

	public function setIsDanger($isDanger)
	{
		$this->isDanger = $isDanger;
		$this->apiParas["is_danger"] = $isDanger;
	}

	public function getIsDanger()
	{
		return $this->isDanger;
	}

	public function setIsHygroscopic($isHygroscopic)
	{
		$this->isHygroscopic = $isHygroscopic;
		$this->apiParas["is_hygroscopic"] = $isHygroscopic;
	}

	public function getIsHygroscopic()
	{
		return $this->isHygroscopic;
	}

	public function setIsShelflife($isShelflife)
	{
		$this->isShelflife = $isShelflife;
		$this->apiParas["is_shelflife"] = $isShelflife;
	}

	public function getIsShelflife()
	{
		return $this->isShelflife;
	}

	public function setIsSnMgt($isSnMgt)
	{
		$this->isSnMgt = $isSnMgt;
		$this->apiParas["is_sn_mgt"] = $isSnMgt;
	}

	public function getIsSnMgt()
	{
		return $this->isSnMgt;
	}

	public function setItemCode($itemCode)
	{
		$this->itemCode = $itemCode;
		$this->apiParas["item_code"] = $itemCode;
	}

	public function getItemCode()
	{
		return $this->itemCode;
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

	public function setItemPrice($itemPrice)
	{
		$this->itemPrice = $itemPrice;
		$this->apiParas["item_price"] = $itemPrice;
	}

	public function getItemPrice()
	{
		return $this->itemPrice;
	}

	public function setLength($length)
	{
		$this->length = $length;
		$this->apiParas["length"] = $length;
	}

	public function getLength()
	{
		return $this->length;
	}

	public function setLifecycle($lifecycle)
	{
		$this->lifecycle = $lifecycle;
		$this->apiParas["lifecycle"] = $lifecycle;
	}

	public function getLifecycle()
	{
		return $this->lifecycle;
	}

	public function setLockupLifecycle($lockupLifecycle)
	{
		$this->lockupLifecycle = $lockupLifecycle;
		$this->apiParas["lockup_lifecycle"] = $lockupLifecycle;
	}

	public function getLockupLifecycle()
	{
		return $this->lockupLifecycle;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setNetWeight($netWeight)
	{
		$this->netWeight = $netWeight;
		$this->apiParas["net_weight"] = $netWeight;
	}

	public function getNetWeight()
	{
		return $this->netWeight;
	}

	public function setOriginAddress($originAddress)
	{
		$this->originAddress = $originAddress;
		$this->apiParas["origin_address"] = $originAddress;
	}

	public function getOriginAddress()
	{
		return $this->originAddress;
	}

	public function setPcs($pcs)
	{
		$this->pcs = $pcs;
		$this->apiParas["pcs"] = $pcs;
	}

	public function getPcs()
	{
		return $this->pcs;
	}

	public function setRejectLifecycle($rejectLifecycle)
	{
		$this->rejectLifecycle = $rejectLifecycle;
		$this->apiParas["reject_lifecycle"] = $rejectLifecycle;
	}

	public function getRejectLifecycle()
	{
		return $this->rejectLifecycle;
	}

	public function setSize($size)
	{
		$this->size = $size;
		$this->apiParas["size"] = $size;
	}

	public function getSize()
	{
		return $this->size;
	}

	public function setSpecification($specification)
	{
		$this->specification = $specification;
		$this->apiParas["specification"] = $specification;
	}

	public function getSpecification()
	{
		return $this->specification;
	}

	public function setStoreCode($storeCode)
	{
		$this->storeCode = $storeCode;
		$this->apiParas["store_code"] = $storeCode;
	}

	public function getStoreCode()
	{
		return $this->storeCode;
	}

	public function setTagPrice($tagPrice)
	{
		$this->tagPrice = $tagPrice;
		$this->apiParas["tag_price"] = $tagPrice;
	}

	public function getTagPrice()
	{
		return $this->tagPrice;
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

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setUseYn($useYn)
	{
		$this->useYn = $useYn;
		$this->apiParas["use_yn"] = $useYn;
	}

	public function getUseYn()
	{
		return $this->useYn;
	}

	public function setVolume($volume)
	{
		$this->volume = $volume;
		$this->apiParas["volume"] = $volume;
	}

	public function getVolume()
	{
		return $this->volume;
	}

	public function setWidth($width)
	{
		$this->width = $width;
		$this->apiParas["width"] = $width;
	}

	public function getWidth()
	{
		return $this->width;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.wms.sku.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemCode,"itemCode");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkNotNull($this->type,"type");
		RequestCheckUtil::checkNotNull($this->useYn,"useYn");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
