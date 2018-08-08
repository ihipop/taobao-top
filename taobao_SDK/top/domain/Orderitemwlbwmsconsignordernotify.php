<?php

/**
 * 订单商品信息
 * @author auto create
 */
class Orderitemwlbwmsconsignordernotify
{
	
	/** 
	 * 商品成交价格=销售价格-优惠金额
	 **/
	public $actual_price;
	
	/** 
	 * 商品优惠金额
	 **/
	public $discount_amount;
	
	/** 
	 * 订单商品拓展属性数据
	 **/
	public $extend_fields;
	
	/** 
	 * 库存类型
	 **/
	public $inventory_type;
	
	/** 
	 * 交易平台商品编码
	 **/
	public $item_ext_code;
	
	/** 
	 * ERP商品ID
	 **/
	public $item_id;
	
	/** 
	 * 商品名称
	 **/
	public $item_name;
	
	/** 
	 * 销售价格
	 **/
	public $item_price;
	
	/** 
	 * 商品数量
	 **/
	public $item_quantity;
	
	/** 
	 * ERP订单明细行号ID，数字类型
	 **/
	public $order_item_id;
	
	/** 
	 * 平台交易订单编码，如果不传入淘系交易订单，子订单系统自动标示此商品为赠品；
	 **/
	public $order_source_code;
	
	/** 
	 * 货主ID
	 **/
	public $owner_user_id;
	
	/** 
	 * 货主名称
	 **/
	public $owner_user_name;
	
	/** 
	 * ERP店铺编码
	 **/
	public $shop_code;
	
	/** 
	 * 平台子交易编码
	 **/
	public $sub_source_code;
	
	/** 
	 * 店铺ID
	 **/
	public $user_id;
	
	/** 
	 * 店铺名称
	 **/
	public $user_name;	
}
?>