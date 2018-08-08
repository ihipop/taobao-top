<?php
/**
 * TOP API: taobao.item.barcode.update request
 * 
 * @author auto create
 * @since 1.0, 2014.09.29
 */
class ItemBarcodeUpdateRequest
{
	/** 
	 * 是否强制保存商品条码。
true：强制保存
false ：需要执行条码库校验
	 **/
	private $isforce;
	
	/** 
	 * 商品条形码，如果不用更新，可选择不填
	 **/
	private $itemBarcode;
	
	/** 
	 * 被更新商品的ID
	 **/
	private $itemId;
	
	/** 
	 * SKU维度的条形码，和sku_ids字段一一对应，中间以英文逗号分隔
	 **/
	private $skuBarcodes;
	
	/** 
	 * 被更新SKU的ID列表，中间以英文逗号进行分隔。如果没有SKU或者不需要更新SKU的条形码，不需要设置
	 **/
	private $skuIds;
	
	/** 
	 * 访问来源，这字段提供给千牛扫码枪用，
其他调用方，不需要填写
	 **/
	private $src;
	
	private $apiParas = array();
	
	public function setIsforce($isforce)
	{
		$this->isforce = $isforce;
		$this->apiParas["isforce"] = $isforce;
	}

	public function getIsforce()
	{
		return $this->isforce;
	}

	public function setItemBarcode($itemBarcode)
	{
		$this->itemBarcode = $itemBarcode;
		$this->apiParas["item_barcode"] = $itemBarcode;
	}

	public function getItemBarcode()
	{
		return $this->itemBarcode;
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

	public function setSkuBarcodes($skuBarcodes)
	{
		$this->skuBarcodes = $skuBarcodes;
		$this->apiParas["sku_barcodes"] = $skuBarcodes;
	}

	public function getSkuBarcodes()
	{
		return $this->skuBarcodes;
	}

	public function setSkuIds($skuIds)
	{
		$this->skuIds = $skuIds;
		$this->apiParas["sku_ids"] = $skuIds;
	}

	public function getSkuIds()
	{
		return $this->skuIds;
	}

	public function setSrc($src)
	{
		$this->src = $src;
		$this->apiParas["src"] = $src;
	}

	public function getSrc()
	{
		return $this->src;
	}

	public function getApiMethodName()
	{
		return "taobao.item.barcode.update";
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
