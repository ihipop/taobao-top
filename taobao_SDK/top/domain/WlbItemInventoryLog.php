<?php

/**
 * 库存变更记录
 * @author auto create
 */
class WlbItemInventoryLog
{
	
	/** 
	 * 批次号
	 **/
	public $batch_code;
	
	/** 
	 * 业务单据号
	 **/
	public $biz_order_code;
	
	/** 
	 * 创建日期
	 **/
	public $gmt_create;
	
	/** 
	 * 库存变更ID
	 **/
	public $id;
	
	/** 
	 * VENDIBLE  1-可销售;FREEZE  201-冻结库存;ONWAY  301-在途库存;DEFECT  101-残存品;ENGINE_DAMAGE 102-机损;BOX_DAMAGE 103-箱损
	 **/
	public $invent_type;
	
	/** 
	 * 商品ID
	 **/
	public $item_id;
	
	/** 
	 * 库存操作作类型CHU_KU 1-出库RU_KU 2-入库FREEZE 3-冻结THAW 4-解冻CHECK_FREEZE 5-冻结确认CHANGE_KU 6-库存类型变更
	 **/
	public $op_type;
	
	/** 
	 * 库存操作者ID
	 **/
	public $op_user_id;
	
	/** 
	 * 订单号
	 **/
	public $order_code;
	
	/** 
	 * 订单商品ID
	 **/
	public $order_item_id;
	
	/** 
	 * 处理数量变化值
	 **/
	public $quantity;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * 结果值
	 **/
	public $result_quantity;
	
	/** 
	 * 仓库编码
	 **/
	public $store_code;
	
	/** 
	 * 用户ID
	 **/
	public $user_id;	
}
?>