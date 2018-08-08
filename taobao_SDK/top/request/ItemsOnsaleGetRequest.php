<?php
/**
 * TOP API: taobao.items.onsale.get request
 * 
 * @author auto create
 * @since 1.0, 2016.08.05
 */
class ItemsOnsaleGetRequest
{
	/** 
	 * 商品类目ID。ItemCat中的cid字段。可以通过taobao.itemcats.get取到
	 **/
	private $cid;
	
	/** 
	 * 结束的修改时间
	 **/
	private $endModified;
	
	/** 
	 * 需返回的字段列表。可选值：Item商品结构体中的以下字段： approve_status,num_iid,title,nick,type,cid,pic_url,num,props,valid_thru,list_time,price,has_discount,has_invoice,has_warranty,has_showcase,modified,delist_time,postage_id,seller_cids,outer_id,sold_quantity ；字段之间用“,”分隔。不支持其他字段，如果需要获取其他字段数据，调用taobao.item.seller.get 获取。
	 **/
	private $fields;
	
	/** 
	 * 是否参与会员折扣。可选值：true，false。默认不过滤该条件
	 **/
	private $hasDiscount;
	
	/** 
	 * 是否橱窗推荐。 可选值：true，false。默认不过滤该条件
	 **/
	private $hasShowcase;
	
	/** 
	 * 组合商品
	 **/
	private $isCombine;
	
	/** 
	 * 是否挂接了达尔文标准产品体系
	 **/
	private $isCspu;
	
	/** 
	 * 商品是否在外部网店显示
	 **/
	private $isEx;
	
	/** 
	 * 商品是否在淘宝显示
	 **/
	private $isTaobao;
	
	/** 
	 * 排序方式。格式为column:asc/desc ，column可选值:list_time(上架时间),delist_time(下架时间),num(商品数量)，modified(最近修改时间)，sold_quantity（商品销量）,;默认上架时间降序(即最新上架排在前面)。如按照上架时间降序排序方式为list_time:desc
	 **/
	private $orderBy;
	
	/** 
	 * 页码。取值范围:大于零的整数。默认值为1,即默认返回第一页数据。用此接口获取数据时，当翻页获取的条数（page_no*page_size）超过10万,为了保护后台搜索引擎，接口将报错。所以请大家尽可能的细化自己的搜索条件，例如根据修改时间分段获取商品
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围:大于零的整数;最大值：200；默认值：40。用此接口获取数据时，当翻页获取的条数（page_no*page_size）超过2万,为了保护后台搜索引擎，接口将报错。所以请大家尽可能的细化自己的搜索条件，例如根据修改时间分段获取商品
	 **/
	private $pageSize;
	
	/** 
	 * 搜索字段。搜索商品的title。
	 **/
	private $q;
	
	/** 
	 * 卖家店铺内自定义类目ID。多个之间用“,”分隔。可以根据taobao.sellercats.list.get获得.(<font color="red">注：目前最多支持32个ID号传入</font>)
	 **/
	private $sellerCids;
	
	/** 
	 * 起始的修改时间
	 **/
	private $startModified;
	
	private $apiParas = array();
	
	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function setEndModified($endModified)
	{
		$this->endModified = $endModified;
		$this->apiParas["end_modified"] = $endModified;
	}

	public function getEndModified()
	{
		return $this->endModified;
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

	public function setHasDiscount($hasDiscount)
	{
		$this->hasDiscount = $hasDiscount;
		$this->apiParas["has_discount"] = $hasDiscount;
	}

	public function getHasDiscount()
	{
		return $this->hasDiscount;
	}

	public function setHasShowcase($hasShowcase)
	{
		$this->hasShowcase = $hasShowcase;
		$this->apiParas["has_showcase"] = $hasShowcase;
	}

	public function getHasShowcase()
	{
		return $this->hasShowcase;
	}

	public function setIsCombine($isCombine)
	{
		$this->isCombine = $isCombine;
		$this->apiParas["is_combine"] = $isCombine;
	}

	public function getIsCombine()
	{
		return $this->isCombine;
	}

	public function setIsCspu($isCspu)
	{
		$this->isCspu = $isCspu;
		$this->apiParas["is_cspu"] = $isCspu;
	}

	public function getIsCspu()
	{
		return $this->isCspu;
	}

	public function setIsEx($isEx)
	{
		$this->isEx = $isEx;
		$this->apiParas["is_ex"] = $isEx;
	}

	public function getIsEx()
	{
		return $this->isEx;
	}

	public function setIsTaobao($isTaobao)
	{
		$this->isTaobao = $isTaobao;
		$this->apiParas["is_taobao"] = $isTaobao;
	}

	public function getIsTaobao()
	{
		return $this->isTaobao;
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

	public function setQ($q)
	{
		$this->q = $q;
		$this->apiParas["q"] = $q;
	}

	public function getQ()
	{
		return $this->q;
	}

	public function setSellerCids($sellerCids)
	{
		$this->sellerCids = $sellerCids;
		$this->apiParas["seller_cids"] = $sellerCids;
	}

	public function getSellerCids()
	{
		return $this->sellerCids;
	}

	public function setStartModified($startModified)
	{
		$this->startModified = $startModified;
		$this->apiParas["start_modified"] = $startModified;
	}

	public function getStartModified()
	{
		return $this->startModified;
	}

	public function getApiMethodName()
	{
		return "taobao.items.onsale.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->cid,0,"cid");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
