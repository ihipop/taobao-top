<?php
/**
 * TOP API: tmall.item.shiptime.update request
 * 
 * @author auto create
 * @since 1.0, 2017.01.03
 */
class TmallItemShiptimeUpdateRequest
{
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	/** 
	 * 批量更新商品/SKU发货时间的备选项
	 **/
	private $option;
	
	/** 
	 * 被更新发货时间（商品级）；格式和具体设置的发货时间格式相关。绝对发货时间填写yyyy-MM-dd;相对发货时间填写数字。发货时间必须在当前时间后三天。如果设置的绝对时间小于当前时间的三天后，会清除该商品的发货时间设置。如果是相对时间小于3，则会提示出错。如果shiptimeType为0，要清除商品上的发货时间，该字段可以填任意字符,也可以不填。
	 **/
	private $shipTime;
	
	/** 
	 * 被更新SKU的发货时间，后台会根据三个子属性去查找匹配的sku，如果找到就默认对sku进行更新，当无匹配sku且更新类型针对sku，会报错。
	 **/
	private $skuShipTimes;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setOption($option)
	{
		$this->option = $option;
		$this->apiParas["option"] = $option;
	}

	public function getOption()
	{
		return $this->option;
	}

	public function setShipTime($shipTime)
	{
		$this->shipTime = $shipTime;
		$this->apiParas["ship_time"] = $shipTime;
	}

	public function getShipTime()
	{
		return $this->shipTime;
	}

	public function setSkuShipTimes($skuShipTimes)
	{
		$this->skuShipTimes = $skuShipTimes;
		$this->apiParas["sku_ship_times"] = $skuShipTimes;
	}

	public function getSkuShipTimes()
	{
		return $this->skuShipTimes;
	}

	public function getApiMethodName()
	{
		return "tmall.item.shiptime.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
