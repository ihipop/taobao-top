<?php

/**
 * 退款详情
 * @author auto create
 */
class Refund
{
	
	/** 
	 * 卖家收货地址
	 **/
	public $address;
	
	/** 
	 * 退款先行垫付默认的未申请状态 0;退款先行垫付申请中  1;退款先行垫付，垫付完成 2;退款先行垫付，卖家拒绝收货 3;退款先行垫付，垫付关闭 4;退款先行垫付，垫付分账成功 5;
	 **/
	public $advance_status;
	
	/** 
	 * 支付宝交易号
	 **/
	public $alipay_no;
	
	/** 
	 * 退款扩展属性
	 **/
	public $attribute;
	
	/** 
	 * 买家昵称
	 **/
	public $buyer_nick;
	
	/** 
	 * 物流公司名称
	 **/
	public $company_name;
	
	/** 
	 * 退款申请时间。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $created;
	
	/** 
	 * 不需客服介入1;需要客服介入2;客服已经介入3;客服初审完成 4;客服主管复审失败5;客服处理完成6;
	 **/
	public $cs_status;
	
	/** 
	 * 退款说明
	 **/
	public $desc;
	
	/** 
	 * 退货时间。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $good_return_time;
	
	/** 
	 * 货物状态。可选值BUYER_NOT_RECEIVED (买家未收到货) BUYER_RECEIVED (买家已收到货) BUYER_RETURNED_GOODS (买家已退货)
	 **/
	public $good_status;
	
	/** 
	 * 买家是否需要退货。可选值:true(是),false(否)
	 **/
	public $has_good_return;
	
	/** 
	 * 申请退款的商品字符串编号(注意：iid近期即将废弃，请用num_iid参数)
	 **/
	public $iid;
	
	/** 
	 * 更新时间。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $modified;
	
	/** 
	 * 商品购买数量
	 **/
	public $num;
	
	/** 
	 * 申请退款的商品数字编号
	 **/
	public $num_iid;
	
	/** 
	 * 子订单号。如果是单笔交易oid会等于tid
	 **/
	public $oid;
	
	/** 
	 * 退款约束，可选值：cannot_refuse（不允许操作），refund_onweb（需要到网页版操作）
	 **/
	public $operation_contraint;
	
	/** 
	 * 退款对应的订单交易状态。可选值TRADE_NO_CREATE_PAY(没有创建支付宝交易) WAIT_BUYER_PAY(等待买家付款) WAIT_SELLER_SEND_GOODS(等待卖家发货,即:买家已付款) WAIT_BUYER_CONFIRM_GOODS(等待买家确认收货,即:卖家已发货) TRADE_BUYER_SIGNED(买家已签收,货到付款专用) TRADE_FINISHED(交易成功) TRADE_CLOSED(交易关闭) TRADE_CLOSED_BY_TAOBAO(交易被淘宝关闭) ALL_WAIT_PAY(包含：WAIT_BUYER_PAY、TRADE_NO_CREATE_PAY) ALL_CLOSED(包含：TRADE_CLOSED、TRADE_CLOSED_BY_TAOBAO) 取自"http://open.taobao.com/dev/index.php/%E4%BA%A4%E6%98%93%E7%8A%B6%E6%80%81"
	 **/
	public $order_status;
	
	/** 
	 * 商品外部商家编码
	 **/
	public $outer_id;
	
	/** 
	 * 支付给卖家的金额(交易总金额-退还给买家的金额)。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $payment;
	
	/** 
	 * 商品价格。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $price;
	
	/** 
	 * 退款原因
	 **/
	public $reason;
	
	/** 
	 * 退还金额(退还给买家的金额)。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $refund_fee;
	
	/** 
	 * 退款单号
	 **/
	public $refund_id;
	
	/** 
	 * 退款阶段，可选值：onsale/aftersale
	 **/
	public $refund_phase;
	
	/** 
	 * 退款超时结构RefundRemindTimeout
	 **/
	public $refund_remind_timeout;
	
	/** 
	 * 退款版本号（时间戳）
	 **/
	public $refund_version;
	
	/** 
	 * 卖家昵称
	 **/
	public $seller_nick;
	
	/** 
	 * 物流方式.可选值:free(卖家包邮),post(平邮),express(快递),ems(EMS).
	 **/
	public $shipping_type;
	
	/** 
	 * 退货运单号
	 **/
	public $sid;
	
	/** 
	 * 商品SKU信息
	 **/
	public $sku;
	
	/** 
	 * 商品SKU信息
	 **/
	public $sku_info;
	
	/** 
	 * 分账给卖家的钱
	 **/
	public $split_seller_fee;
	
	/** 
	 * 分账给淘宝的钱
	 **/
	public $split_taobao_fee;
	
	/** 
	 * 退款状态。可选值WAIT_SELLER_AGREE(买家已经申请退款，等待卖家同意) WAIT_BUYER_RETURN_GOODS(卖家已经同意退款，等待买家退货) WAIT_SELLER_CONFIRM_GOODS(买家已经退货，等待卖家确认收货) SELLER_REFUSE_BUYER(卖家拒绝退款) CLOSED(退款关闭) SUCCESS(退款成功)
	 **/
	public $status;
	
	/** 
	 * 淘宝交易单号
	 **/
	public $tid;
	
	/** 
	 * 商品标题
	 **/
	public $title;
	
	/** 
	 * 交易总金额。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $total_fee;	
}
?>