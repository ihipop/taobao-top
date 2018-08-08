<?php

/**
 * 子订单的帐务数据结构
 * @author auto create
 */
class OrderAmount
{
	
	/** 
	 * 卖家手工调整的子订单的优惠金额.格式为:1.01;单位:元;精确到小数点后两位.
	 **/
	public $adjust_fee;
	
	/** 
	 * 子订单的系统优惠金额。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $discount_fee;
	
	/** 
	 * 分摊之后的实付金额
	 **/
	public $divide_order_fee;
	
	/** 
	 * 子交易订单中购买商品的数量
	 **/
	public $num;
	
	/** 
	 * 子订单对应的商品数字id
	 **/
	public $num_iid;
	
	/** 
	 * 子交易订单编号
	 **/
	public $oid;
	
	/** 
	 * 优惠分摊
	 **/
	public $part_mjz_discount;
	
	/** 
	 * 子订单实付金额。精确到2位小数，单位:元。如:200.07，表示:200元7分。计算公式如下：payment = price * num + adjust_fee - discount_fee + post_fee(邮费，单笔子订单时子订单实付金额包含邮费，多笔子订单时不包含邮费)；对于退款成功的子订单，由于主订单的优惠分摊金额，会造成该字段可能不为0.00元。建议使用退款前的实付金额减去退款单中的实际退款金额计算。
	 **/
	public $payment;
	
	/** 
	 * 商品价格。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $price;
	
	/** 
	 * 子订单的系统优惠的名称，对应于discount_fee的名称
	 **/
	public $promotion_name;
	
	/** 
	 * 子订单对应的商品的sku_id
	 **/
	public $sku_id;
	
	/** 
	 * SKU的值。如：机身颜色:黑色;手机套餐:官方标配
	 **/
	public $sku_properties_name;
	
	/** 
	 * 商品标题
	 **/
	public $title;	
}
?>