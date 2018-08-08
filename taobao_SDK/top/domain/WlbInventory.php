<?php

/**
 * 库存详情对象。其中包括货主ID，仓库编码，库存，库存类型等属性
 * @author auto create
 */
class WlbInventory
{
	
	/** 
	 * 商品ID
	 **/
	public $item_id;
	
	/** 
	 * 冻结(锁定)数量，用来跟踪库存的中间状态，比如前台销售了1件商品，这时lock加1，当商品出库的时候lock再减回去
	 **/
	public $lock_quantity;
	
	/** 
	 * 库存占用数，两部分组成：
1.交易占用
买家付款后在仓库发货出库前会占用库存。
2.非交易出库占用
出库单创建仍未出库时会将库存占用
	 **/
	public $occupy_quantity;
	
	/** 
	 * 可销库存数量(库存总数-拍下预扣数-占用数)
	 **/
	public $quantity;
	
	/** 
	 * 买家拍下但是没有付款的预扣数量，超过一定时间没有付款会自动释放。为防止超卖，这部分库存不可售，也暂不能出库。
	 **/
	public $reserve_quantity;
	
	/** 
	 * 仓库编码，关联到仓库类型服务的编码非托管库存(卖家自己管理的库存，物流宝不可见又称自有库存)的所在仓库编码: STORE_SYS_PRIVATE
	 **/
	public $store_code;
	
	/** 
	 * VENDIBLE--可销售库存
FREEZE--冻结库存
ONWAY--在途库存
DEFECT--残次品库存
	 **/
	public $type;
	
	/** 
	 * 货主ID
	 **/
	public $user_id;	
}
?>