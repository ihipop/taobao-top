<?php

/**
 * 物流宝订单商品
 * @author auto create
 */
class WlbOrderItem
{
	
	/** 
	 * 批次号备注
	 **/
	public $batch_remark;
	
	/** 
	 * 物流宝订单确认状态：
NO_NEED_CONFIRM--不需要确认
WAIT_CONFIRM--待确认
CONFIRMED--已确认
	 **/
	public $confirm_status;
	
	/** 
	 * 外部实体id
	 **/
	public $ext_entity_id;
	
	/** 
	 * 外部实体类型
	 **/
	public $ext_entity_type;
	
	/** 
	 * 第一位标示是否为赠品
	 **/
	public $flag;
	
	/** 
	 * 订单商品id
	 **/
	public $id;
	
	/** 
	 * INVENTORY_TYPE_SELL 可销库存
INVENTORY_TYPE_IMPERFECTIONS 残次库存
INVENTORY_TYPE_FREEZE 冻结库存
INVENTORY_TYPE_ON_PASSAGE 在途库存
INVENTORY_TYPE_ENGINE_DAMAGE 机损
INVENTORY_TYPE_BOX_DAMAGE 箱损
	 **/
	public $inventory_type;
	
	/** 
	 * 订单商品编码
	 **/
	public $item_code;
	
	/** 
	 * 物流宝订单商品的物流宝商品id
	 **/
	public $item_id;
	
	/** 
	 * 订单商品名称
	 **/
	public $item_name;
	
	/** 
	 * 商品价格
	 **/
	public $item_price;
	
	/** 
	 * 物流宝订单编码
	 **/
	public $order_code;
	
	/** 
	 * 物流宝订单id
	 **/
	public $order_id;
	
	/** 
	 * 
	 **/
	public $order_status;
	
	/** 
	 * 子交易号
	 **/
	public $order_sub2code;
	
	/** 
	 * 订单号
	 **/
	public $order_sub_code;
	
	/** 
	 * (1)其它: OTHER (2)淘宝交易: TAOBAO (3)调拨: ALLOCATION (4)盘点:CHECK (5)销售采购:PRUCHASE(6)其它交易：OTHER_TRADE
	 **/
	public $order_sub_type;
	
	/** 
	 * 订单商品图片url
	 **/
	public $picture_url;
	
	/** 
	 * 计划数量
	 **/
	public $plan_quantity;
	
	/** 
	 * 货主id
	 **/
	public $provider_tp_id;
	
	/** 
	 * 货主nick
	 **/
	public $provider_tp_nick;
	
	/** 
	 * 商品发布版本号
	 **/
	public $publish_version;
	
	/** 
	 * 实际数量
	 **/
	public $real_quantity;
	
	/** 
	 * 订单商品备注
	 **/
	public $remark;
	
	/** 
	 * 订单商品用户id
	 **/
	public $user_id;
	
	/** 
	 * 订单商品用户昵称
	 **/
	public $user_nick;	
}
?>