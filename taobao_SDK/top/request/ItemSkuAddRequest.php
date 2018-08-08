<?php
/**
 * TOP API: taobao.item.sku.add request
 * 
 * @author auto create
 * @since 1.0, 2014.10.20
 */
class ItemSkuAddRequest
{
	/** 
	 * 忽略警告提示.
	 **/
	private $ignorewarning;
	
	/** 
	 * sku所属商品的价格。当用户新增sku，使商品价格不属于sku价格之间的时候，用于修改商品的价格，使sku能够添加成功
	 **/
	private $itemPrice;
	
	/** 
	 * Sku文字的版本。可选值:zh_HK(繁体),zh_CN(简体);默认值:zh_CN
	 **/
	private $lang;
	
	/** 
	 * Sku所属商品数字id，可通过 taobao.item.get 获取。必选
	 **/
	private $numIid;
	
	/** 
	 * Sku的商家外部id
	 **/
	private $outerId;
	
	/** 
	 * Sku的销售价格。商品的价格要在商品所有的sku的价格之间。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	private $price;
	
	/** 
	 * Sku属性串。格式:pid:vid;pid:vid,如:1627207:3232483;1630696:3284570,表示:机身颜色:军绿色;手机套餐:一电一充。
	 **/
	private $properties;
	
	/** 
	 * Sku的库存数量。sku的总数量应该小于等于商品总数量(Item的NUM)。取值范围:大于零的整数
	 **/
	private $quantity;
	
	/** 
	 * 家装建材类目，商品SKU的高度，单位为cm，部分类目必选。天猫商家专用。
可选值为："0-15", "15-25", "25-50", "50-60", "60-80", "80-120", "120-160", "160-200"。
数据和SKU一一对应，用,分隔，如：15-25,25-50,25-50
	 **/
	private $skuHdHeight;
	
	/** 
	 * 家装建材类目，商品SKU的灯头数量，正整数，大于等于3，部分类目必选。天猫商家专用。
数据和SKU一一对应，用,分隔，如：3,5,7
	 **/
	private $skuHdLampQuantity;
	
	/** 
	 * 家装建材类目，商品SKU的长度，正整数，单位为cm，部分类目必选。天猫商家专用。
数据和SKU一一对应，用,分隔，如：20,30,30
	 **/
	private $skuHdLength;
	
	/** 
	 * 产品的规格信息
	 **/
	private $specId;
	
	private $apiParas = array();
	
	public function setIgnorewarning($ignorewarning)
	{
		$this->ignorewarning = $ignorewarning;
		$this->apiParas["ignorewarning"] = $ignorewarning;
	}

	public function getIgnorewarning()
	{
		return $this->ignorewarning;
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

	public function setLang($lang)
	{
		$this->lang = $lang;
		$this->apiParas["lang"] = $lang;
	}

	public function getLang()
	{
		return $this->lang;
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

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setPrice($price)
	{
		$this->price = $price;
		$this->apiParas["price"] = $price;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setProperties($properties)
	{
		$this->properties = $properties;
		$this->apiParas["properties"] = $properties;
	}

	public function getProperties()
	{
		return $this->properties;
	}

	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
		$this->apiParas["quantity"] = $quantity;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function setSkuHdHeight($skuHdHeight)
	{
		$this->skuHdHeight = $skuHdHeight;
		$this->apiParas["sku_hd_height"] = $skuHdHeight;
	}

	public function getSkuHdHeight()
	{
		return $this->skuHdHeight;
	}

	public function setSkuHdLampQuantity($skuHdLampQuantity)
	{
		$this->skuHdLampQuantity = $skuHdLampQuantity;
		$this->apiParas["sku_hd_lamp_quantity"] = $skuHdLampQuantity;
	}

	public function getSkuHdLampQuantity()
	{
		return $this->skuHdLampQuantity;
	}

	public function setSkuHdLength($skuHdLength)
	{
		$this->skuHdLength = $skuHdLength;
		$this->apiParas["sku_hd_length"] = $skuHdLength;
	}

	public function getSkuHdLength()
	{
		return $this->skuHdLength;
	}

	public function setSpecId($specId)
	{
		$this->specId = $specId;
		$this->apiParas["spec_id"] = $specId;
	}

	public function getSpecId()
	{
		return $this->specId;
	}

	public function getApiMethodName()
	{
		return "taobao.item.sku.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->numIid,"numIid");
		RequestCheckUtil::checkMinValue($this->numIid,0,"numIid");
		RequestCheckUtil::checkNotNull($this->price,"price");
		RequestCheckUtil::checkNotNull($this->properties,"properties");
		RequestCheckUtil::checkNotNull($this->quantity,"quantity");
		RequestCheckUtil::checkMinValue($this->quantity,0,"quantity");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
