<?php
/**
 * TOP API: taobao.products.search request
 * 
 * @author auto create
 * @since 1.0, 2015.04.21
 */
class ProductsSearchRequest
{
	/** 
	 * 按条码搜索产品信息,多个逗号隔开，不支持条码为全零的方式
	 **/
	private $barcodeStr;
	
	/** 
	 * 商品类目ID.调用taobao.itemcats.get获取.
	 **/
	private $cid;
	
	/** 
	 * 用户自定义关键属性,结构：pid1:value1;pid2:value2，如果有型号，系列等子属性用: 隔开 例如：“20000:优衣库:型号:001;632501:1234”，表示“品牌:优衣库:型号:001;货号:1234”
	 **/
	private $customerProps;
	
	/** 
	 * 需返回的字段列表.可选值:Product数据结构中的以下字段:product_id,name,pic_url,cid,props,price,tsc;多个字段之间用","分隔.新增字段status(product的当前状态)
	 **/
	private $fields;
	
	/** 
	 * 市场ID，1为取C2C市场的产品信息， 2为取B2C市场的产品信息。
不填写此值则默认取C2C的产品信息。
	 **/
	private $marketId;
	
	/** 
	 * 页码.传入值为1代表第一页,传入值为2代表第二页,依此类推.默认返回的数据是从第一页开始.
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数.每页返回最多返回100条,默认值为40.
	 **/
	private $pageSize;
	
	/** 
	 * 属性,属性值的组合.格式:pid:vid;pid:vid;调用taobao.itemprops.get获取类目属性pid 
,再用taobao.itempropvalues.get取得vid.
	 **/
	private $props;
	
	/** 
	 * 搜索的关键词是用来搜索产品的title.　注:q,cid和props至少传入一个
	 **/
	private $q;
	
	/** 
	 * 想要获取的产品的状态列表，支持多个状态并列获取，多个状态之间用","分隔，最多同时指定5种状态。例如，只获取小二确认的spu传入"3",只要商家确认的传入"0"，既要小二确认又要商家确认的传入"0,3"。目前只支持者两种类型的状态搜索，输入其他状态无效。
	 **/
	private $status;
	
	/** 
	 * 按关联产品规格specs搜索套装产品
	 **/
	private $suiteItemsStr;
	
	/** 
	 * 传入值为：3表示3C表示3C垂直市场产品，4表示鞋城垂直市场产品，8表示网游垂直市场产品。一次只能指定一种垂直市场类型
	 **/
	private $verticalMarket;
	
	private $apiParas = array();
	
	public function setBarcodeStr($barcodeStr)
	{
		$this->barcodeStr = $barcodeStr;
		$this->apiParas["barcode_str"] = $barcodeStr;
	}

	public function getBarcodeStr()
	{
		return $this->barcodeStr;
	}

	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function setCustomerProps($customerProps)
	{
		$this->customerProps = $customerProps;
		$this->apiParas["customer_props"] = $customerProps;
	}

	public function getCustomerProps()
	{
		return $this->customerProps;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
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

	public function setProps($props)
	{
		$this->props = $props;
		$this->apiParas["props"] = $props;
	}

	public function getProps()
	{
		return $this->props;
	}

	public function setQ($q)
	{
		$this->q = $q;
		$this->apiParas["q"] = $q;
	}

	public function getQ()
	{
		return $this->q;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setSuiteItemsStr($suiteItemsStr)
	{
		$this->suiteItemsStr = $suiteItemsStr;
		$this->apiParas["suite_items_str"] = $suiteItemsStr;
	}

	public function getSuiteItemsStr()
	{
		return $this->suiteItemsStr;
	}

	public function setVerticalMarket($verticalMarket)
	{
		$this->verticalMarket = $verticalMarket;
		$this->apiParas["vertical_market"] = $verticalMarket;
	}

	public function getVerticalMarket()
	{
		return $this->verticalMarket;
	}

	public function getApiMethodName()
	{
		return "taobao.products.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkMaxLength($this->status,20,"status");
		RequestCheckUtil::checkMinValue($this->verticalMarket,0,"verticalMarket");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
