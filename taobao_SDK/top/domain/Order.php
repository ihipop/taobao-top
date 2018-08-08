<?php

/**
 * 订单结构
 * @author auto create
 */
class Order
{
	
	/** 
	 * 手工调整金额.格式为:1.01;单位:元;精确到小数点后两位.
	 **/
	public $adjust_fee;
	
	/** 
	 * assemblyItem
	 **/
	public $assembly_item;
	
	/** 
	 * 价格
	 **/
	public $assembly_price;
	
	/** 
	 * 主商品订单id
	 **/
	public $assembly_rela;
	
	/** 
	 * 捆绑的子订单号，表示该子订单要和捆绑的子订单一起发货，用于卖家子订单捆绑发货
	 **/
	public $bind_oid;
	
	/** 
	 * bind_oid字段的升级，支持返回绑定的多个子订单，多个子订单以半角逗号分隔
	 **/
	public $bind_oids;
	
	/** 
	 * 买家昵称
	 **/
	public $buyer_nick;
	
	/** 
	 * 买家是否已评价。可选值：true(已评价)，false(未评价)
	 **/
	public $buyer_rate;
	
	/** 
	 * calPenalty
	 **/
	public $cal_penalty;
	
	/** 
	 * carStoreCode
	 **/
	public $car_store_code;
	
	/** 
	 * carStoreName
	 **/
	public $car_store_name;
	
	/** 
	 * carTaker
	 **/
	public $car_taker;
	
	/** 
	 * carTakerID
	 **/
	public $car_taker_id;
	
	/** 
	 * carTakerIDNum
	 **/
	public $car_taker_id_num;
	
	/** 
	 * carTakerPhone
	 **/
	public $car_taker_phone;
	
	/** 
	 * 交易商品对应的类目ID
	 **/
	public $cid;
	
	/** 
	 * clCarTaker
	 **/
	public $cl_car_taker;
	
	/** 
	 * clCarTakerIDNum
	 **/
	public $cl_car_taker_i_d_num;
	
	/** 
	 * clCarTakerIDNum
	 **/
	public $cl_car_taker_id_num;
	
	/** 
	 * clCarTakerPhone
	 **/
	public $cl_car_taker_phone;
	
	/** 
	 * clDownPayment
	 **/
	public $cl_down_payment;
	
	/** 
	 * clDownPaymentRatio
	 **/
	public $cl_down_payment_ratio;
	
	/** 
	 * clInstallmentNum
	 **/
	public $cl_installment_num;
	
	/** 
	 * clMonthPayment
	 **/
	public $cl_month_payment;
	
	/** 
	 * clServiceFee
	 **/
	public $cl_service_fee;
	
	/** 
	 * clTailPayment
	 **/
	public $cl_tail_payment;
	
	/** 
	 * 天猫搭配宝
	 **/
	public $combo_id;
	
	/** 
	 * 子订单发货时间，当卖家对订单进行了多次发货，子订单的发货时间和主订单的发货时间可能不一样了，那么就需要以子订单的时间为准。（没有进行多次发货的订单，主订单的发货时间和子订单的发货时间都一样）
	 **/
	public $consign_time;
	
	/** 
	 * 定制信息
	 **/
	public $customization;
	
	/** 
	 * 子订单级订单优惠金额。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $discount_fee;
	
	/** 
	 * 分摊之后的实付金额
	 **/
	public $divide_order_fee;
	
	/** 
	 * downPayment
	 **/
	public $down_payment;
	
	/** 
	 * downPaymentRatio
	 **/
	public $down_payment_ratio;
	
	/** 
	 * 子订单的交易结束时间说明：子订单有单独的结束时间，与主订单的结束时间可能有所不同，在有退款发起的时候或者是主订单分阶段付款的时候，子订单的结束时间会早于主订单的结束时间，所以开放这个字段便于订单结束状态的判断
	 **/
	public $end_time;
	
	/** 
	 * 子订单预计发货时间
	 **/
	public $estimate_con_time;
	
	/** 
	 * 车牌号码
	 **/
	public $et_plate_number;
	
	/** 
	 * 天猫汽车服务预约时间
	 **/
	public $et_ser_time;
	
	/** 
	 * 电子凭证预约门店地址
	 **/
	public $et_shop_name;
	
	/** 
	 * 电子凭证核销门店地址
	 **/
	public $et_verified_shop_name;
	
	/** 
	 * 订单履行状态，如喵鲜生极速达：分单完成
	 **/
	public $f_status;
	
	/** 
	 * 单履行内容，如喵鲜生极速达：storeId,phone
	 **/
	public $f_term;
	
	/** 
	 * 订单履行类型，如喵鲜生极速达（jsd）
	 **/
	public $f_type;
	
	/** 
	 * 花呗分期期数
	 **/
	public $fqg_num;
	
	/** 
	 * 商品的字符串编号(注意：iid近期即将废弃，请用num_iid参数)
	 **/
	public $iid;
	
	/** 
	 * installmentNum
	 **/
	public $installment_num;
	
	/** 
	 * 库存类型：6为在途
	 **/
	public $inv_type;
	
	/** 
	 * 子订单所在包裹的运单号
	 **/
	public $invoice_no;
	
	/** 
	 * 表示订单交易是否含有对应的代销采购单。如果该订单中存在一个对应的代销采购单，那么该值为true；反之，该值为false。
	 **/
	public $is_daixiao;
	
	/** 
	 * 是否商家承担手续费
	 **/
	public $is_fqg_s_fee;
	
	/** 
	 * 是否超卖
	 **/
	public $is_oversold;
	
	/** 
	 * 是否是服务订单，是返回true，否返回false。
	 **/
	public $is_service_order;
	
	/** 
	 * 是否发货
	 **/
	public $is_sh_ship;
	
	/** 
	 * 子订单是否是www订单
	 **/
	public $is_www;
	
	/** 
	 * 套餐ID
	 **/
	public $item_meal_id;
	
	/** 
	 * 套餐的值。如：M8原装电池:便携支架:M8专用座充:莫凡保护袋
	 **/
	public $item_meal_name;
	
	/** 
	 * 商品备注
	 **/
	public $item_memo;
	
	/** 
	 * 子订单发货的快递公司名称
	 **/
	public $logistics_company;
	
	/** 
	 * 免单金额
	 **/
	public $md_fee;
	
	/** 
	 * 免单资格属性
	 **/
	public $md_qualification;
	
	/** 
	 * 订单修改时间，目前只有taobao.trade.ordersku.update会返回此字段。
	 **/
	public $modified;
	
	/** 
	 * monthPayment
	 **/
	public $month_payment;
	
	/** 
	 * 购买数量。取值范围:大于零的整数
	 **/
	public $num;
	
	/** 
	 * 商品数字ID
	 **/
	public $num_iid;
	
	/** 
	 * 
	 **/
	public $o2o_et_order_id;
	
	/** 
	 * 子订单编号
	 **/
	public $oid;
	
	/** 
	 * oidStr
	 **/
	public $oid_str;
	
	/** 
	 * top动态字段
	 **/
	public $order_attr;
	
	/** 
	 * 子订单来源,如jhs(聚划算)、taobao(淘宝)、wap(无线)
	 **/
	public $order_from;
	
	/** 
	 * outUniqueId
	 **/
	public $out_unique_id;
	
	/** 
	 * 商家外部编码(可与商家外部系统对接)。外部商家自己定义的商品Item的id，可以通过taobao.items.custom.get获取商品的Item的信息
	 **/
	public $outer_iid;
	
	/** 
	 * 外部网店自己定义的Sku编号
	 **/
	public $outer_sku_id;
	
	/** 
	 * 优惠分摊
	 **/
	public $part_mjz_discount;
	
	/** 
	 * 子订单实付金额。精确到2位小数，单位:元。如:200.07，表示:200元7分。对于多子订单的交易，计算公式如下：payment = price * num + adjust_fee - discount_fee ；单子订单交易，payment与主订单的payment一致，对于退款成功的子订单，由于主订单的优惠分摊金额，会造成该字段可能不为0.00元。建议使用退款前的实付金额减去退款单中的实际退款金额计算。
	 **/
	public $payment;
	
	/** 
	 * penalty
	 **/
	public $penalty;
	
	/** 
	 * 商品图片的绝对路径
	 **/
	public $pic_path;
	
	/** 
	 * 商品价格。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $price;
	
	/** 
	 * 最近退款ID
	 **/
	public $refund_id;
	
	/** 
	 * 退款状态。退款状态。可选值 WAIT_SELLER_AGREE(买家已经申请退款，等待卖家同意) WAIT_BUYER_RETURN_GOODS(卖家已经同意退款，等待买家退货) WAIT_SELLER_CONFIRM_GOODS(买家已经退货，等待卖家确认收货) SELLER_REFUSE_BUYER(卖家拒绝退款) CLOSED(退款关闭) SUCCESS(退款成功)
	 **/
	public $refund_status;
	
	/** 
	 * 卖家昵称
	 **/
	public $seller_nick;
	
	/** 
	 * 卖家是否已评价。可选值：true(已评价)，false(未评价)
	 **/
	public $seller_rate;
	
	/** 
	 * 卖家类型，可选值为：B（商城商家），C（普通卖家）
	 **/
	public $seller_type;
	
	/** 
	 * serviceFee
	 **/
	public $service_fee;
	
	/** 
	 * 仓储信息
	 **/
	public $shipper;
	
	/** 
	 * 子订单的运送方式（卖家对订单进行多次发货之后，一个主订单下的子订单的运送方式可能不同，用order.shipping_type来区分子订单的运送方式）
	 **/
	public $shipping_type;
	
	/** 
	 * 商品的最小库存单位Sku的id.可以通过taobao.item.sku.get获取详细的Sku信息
	 **/
	public $sku_id;
	
	/** 
	 * SKU的值。如：机身颜色:黑色;手机套餐:官方标配
	 **/
	public $sku_properties_name;
	
	/** 
	 * 订单快照详细信息
	 **/
	public $snapshot;
	
	/** 
	 * 订单快照URL
	 **/
	public $snapshot_url;
	
	/** 
	 * 订单状态（请关注此状态，如果为TRADE_CLOSED_BY_TAOBAO状态，则不要对此订单进行发货，切记啊！）。可选值: <ul><li>TRADE_NO_CREATE_PAY(没有创建支付宝交易) </li><li>WAIT_BUYER_PAY(等待买家付款) </li><li>WAIT_SELLER_SEND_GOODS(等待卖家发货,即:买家已付款) </li><li>WAIT_BUYER_CONFIRM_GOODS(等待买家确认收货,即:卖家已发货) </li><li>TRADE_BUYER_SIGNED(买家已签收,货到付款专用) </li><li>TRADE_FINISHED(交易成功) </li><li>TRADE_CLOSED(付款以后用户退款成功，交易自动关闭) </li><li>TRADE_CLOSED_BY_TAOBAO(付款以前，卖家或买家主动关闭交易)</li><li>PAY_PENDING(国际信用卡支付付款确认中)</li></ul>
	 **/
	public $status;
	
	/** 
	 * 发货的仓库编码
	 **/
	public $store_code;
	
	/** 
	 * 天猫国际官网直供子订单关税税费
	 **/
	public $sub_order_tax_fee;
	
	/** 
	 * 天猫国际子订单计税优惠金额
	 **/
	public $sub_order_tax_promotion_fee;
	
	/** 
	 * 天猫国际官网直供子订单关税税率
	 **/
	public $sub_order_tax_rate;
	
	/** 
	 * tailPayment
	 **/
	public $tail_payment;
	
	/** 
	 * 门票有效期的key
	 **/
	public $ticket_expdate_key;
	
	/** 
	 * 对应门票有效期的外部id
	 **/
	public $ticket_outer_id;
	
	/** 
	 * 订单超时到期时间。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $timeout_action_time;
	
	/** 
	 * 商品标题
	 **/
	public $title;
	
	/** 
	 * 支持家装类物流的类型
	 **/
	public $tmser_spu_code;
	
	/** 
	 * 应付金额（商品价格 * 商品数量 + 手工调整金额 - 子订单级订单优惠金额）。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $total_fee;
	
	/** 
	 * 交易类型
	 **/
	public $type;
	
	/** 
	 * wsBankApplyNo
	 **/
	public $ws_bank_apply_no;
	
	/** 
	 * xxx
	 **/
	public $xxx;
	
	/** 
	 * 征集预售订单征集状态：1（征集中），2（征集成功），3（征集失败）
	 **/
	public $zhengji_status;	
}
?>