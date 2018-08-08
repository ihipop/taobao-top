<?php
/**
 * TOP API: taobao.wlb.wms.inventory.query request
 * 
 * @author auto create
 * @since 1.0, 2015.11.16
 */
class WlbWmsInventoryQueryRequest
{
	/** 
	 * 库存批次号，type=2时字段传值有效。 商品设置为批次管理时，商品产生批次库存。当商品为批次管理时，此字段不传值，返回所有批次库存信息。
	 **/
	private $batchCode;
	
	/** 
	 * 渠道编码，type=3时字段传值有效。（TB 淘系， OTHERS 其他）
	 **/
	private $channelCode;
	
	/** 
	 * 失效日期，type=2时字段传值有效。
	 **/
	private $dueDate;
	
	/** 
	 * 库存类型。 (1 正品 101 残次 102 机损 103 箱损 201 冻结库存 301 在途库存 )
	 **/
	private $inventoryType;
	
	/** 
	 * 菜鸟商品ID
	 **/
	private $itemId;
	
	/** 
	 * 分页的第几页
	 **/
	private $pageNo;
	
	/** 
	 * 每页多少条，最大50条
	 **/
	private $pageSize;
	
	/** 
	 * 生产日期，type=2时字段传值有效。
	 **/
	private $produceDate;
	
	/** 
	 * 仓库编码
	 **/
	private $storeCode;
	
	/** 
	 * 库存查询类型 1-	汇总库存，不区分批次和渠道 2-	批次库存，库存按商品批次维度划分 3-	渠道库存，库存按渠道维度划分 （当前业务不支持批次库存和渠道库存共存，批次库存无渠道属性，渠道库存无批次属性）
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setBatchCode($batchCode)
	{
		$this->batchCode = $batchCode;
		$this->apiParas["batch_code"] = $batchCode;
	}

	public function getBatchCode()
	{
		return $this->batchCode;
	}

	public function setChannelCode($channelCode)
	{
		$this->channelCode = $channelCode;
		$this->apiParas["channel_code"] = $channelCode;
	}

	public function getChannelCode()
	{
		return $this->channelCode;
	}

	public function setDueDate($dueDate)
	{
		$this->dueDate = $dueDate;
		$this->apiParas["due_date"] = $dueDate;
	}

	public function getDueDate()
	{
		return $this->dueDate;
	}

	public function setInventoryType($inventoryType)
	{
		$this->inventoryType = $inventoryType;
		$this->apiParas["inventory_type"] = $inventoryType;
	}

	public function getInventoryType()
	{
		return $this->inventoryType;
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

	public function setProduceDate($produceDate)
	{
		$this->produceDate = $produceDate;
		$this->apiParas["produce_date"] = $produceDate;
	}

	public function getProduceDate()
	{
		return $this->produceDate;
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

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.wms.inventory.query";
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
