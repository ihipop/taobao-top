<?php
/**
 * TOP API: taobao.product.update request
 * 
 * @author auto create
 * @since 1.0, 2013.07.05
 */
class ProductUpdateRequest
{
	/** 
	 * 非关键属性.调用taobao.itemprops.get获取pid,调用taobao.itempropvalues.get获取vid;格式:pid:vid;pid:vid
	 **/
	private $binds;
	
	/** 
	 * 产品描述.最大不超过25000个字符
	 **/
	private $desc;
	
	/** 
	 * 存放产品扩展信息，由List(ProductExtraInfo)转化成jsonArray存入.
	 **/
	private $extraInfo;
	
	/** 
	 * 产品主图.最大500K,目前仅支持GIF,JPG
	 **/
	private $image;
	
	/** 
	 * 是否是主图
	 **/
	private $major;
	
	/** 
	 * 市场ID，1为更新C2C市场的产品信息， 2为更新B2C市场的产品信息。
不填写此值则C用户更新B2C市场的产品信息，B用户更新B2C市场的产品信息。
	 **/
	private $marketId;
	
	/** 
	 * 产品名称.最大不超过30个字符
	 **/
	private $name;
	
	/** 
	 * 自定义非关键属性
	 **/
	private $nativeUnkeyprops;
	
	/** 
	 * 外部产品ID
	 **/
	private $outerId;
	
	/** 
	 * 保证清单。
	 **/
	private $packingList;
	
	/** 
	 * 产品市场价.精确到2位小数;单位为元.如:200.07
	 **/
	private $price;
	
	/** 
	 * 产品ID
	 **/
	private $productId;
	
	/** 
	 * 销售属性.调用taobao.itemprops.get获取pid,调用taobao.itempropvalues.get获取vid;格式:pid:vid;pid:vid
	 **/
	private $saleProps;
	
	/** 
	 * 产品卖点描述，最长40个字节
	 **/
	private $sellPt;
	
	private $apiParas = array();
	
	public function setBinds($binds)
	{
		$this->binds = $binds;
		$this->apiParas["binds"] = $binds;
	}

	public function getBinds()
	{
		return $this->binds;
	}

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setExtraInfo($extraInfo)
	{
		$this->extraInfo = $extraInfo;
		$this->apiParas["extra_info"] = $extraInfo;
	}

	public function getExtraInfo()
	{
		return $this->extraInfo;
	}

	public function setImage($image)
	{
		$this->image = $image;
		$this->apiParas["image"] = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setMajor($major)
	{
		$this->major = $major;
		$this->apiParas["major"] = $major;
	}

	public function getMajor()
	{
		return $this->major;
	}

	public function setMarketId($marketId)
	{
		$this->marketId = $marketId;
		$this->apiParas["market_id"] = $marketId;
	}

	public function getMarketId()
	{
		return $this->marketId;
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

	public function setNativeUnkeyprops($nativeUnkeyprops)
	{
		$this->nativeUnkeyprops = $nativeUnkeyprops;
		$this->apiParas["native_unkeyprops"] = $nativeUnkeyprops;
	}

	public function getNativeUnkeyprops()
	{
		return $this->nativeUnkeyprops;
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

	public function setPackingList($packingList)
	{
		$this->packingList = $packingList;
		$this->apiParas["packing_list"] = $packingList;
	}

	public function getPackingList()
	{
		return $this->packingList;
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

	public function setProductId($productId)
	{
		$this->productId = $productId;
		$this->apiParas["product_id"] = $productId;
	}

	public function getProductId()
	{
		return $this->productId;
	}

	public function setSaleProps($saleProps)
	{
		$this->saleProps = $saleProps;
		$this->apiParas["sale_props"] = $saleProps;
	}

	public function getSaleProps()
	{
		return $this->saleProps;
	}

	public function setSellPt($sellPt)
	{
		$this->sellPt = $sellPt;
		$this->apiParas["sell_pt"] = $sellPt;
	}

	public function getSellPt()
	{
		return $this->sellPt;
	}

	public function getApiMethodName()
	{
		return "taobao.product.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->extraInfo,25000,"extraInfo");
		RequestCheckUtil::checkNotNull($this->productId,"productId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
