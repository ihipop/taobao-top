<?php

/**
 * 交易详细信息
 * @author auto create
 */
class Trade
{
	
	/** 
	 * Acookie订单唯一ID。
	 **/
	public $acookie_id;
	
	/** 
	 * 卖家手工调整金额，精确到2位小数，单位：元。如：200.07，表示：200元7分。来源于订单价格修改，如果有多笔子订单的时候，这个为0，单笔的话则跟[order].adjust_fee一样
	 **/
	public $adjust_fee;
	
	/** 
	 * 买家的支付宝id号，在UIC中有记录，买家支付宝的唯一标示，不因为买家更换Email账号而改变。
	 **/
	public $alipay_id;
	
	/** 
	 * 支付宝交易号，如：2009112081173831
	 **/
	public $alipay_no;
	
	/** 
	 * 付款时使用的支付宝积分的额度,单位分，比如返回1，则为1分钱
	 **/
	public $alipay_point;
	
	/** 
	 * 创建交易接口成功后，返回的支付url
	 **/
	public $alipay_url;
	
	/** 
	 * 淘宝下单成功了,但由于某种错误支付宝订单没有创建时返回的信息。taobao.trade.add接口专用
	 **/
	public $alipay_warn_msg;
	
	/** 
	 * 区域id，代表订单下单的区位码，区位码是通过省市区转换而来，通过区位码能精确到区内的划分，比如310012是杭州市西湖区华星路
	 **/
	public $area_id;
	
	/** 
	 * 物流到货时效截单时间，格式 HH:mm
	 **/
	public $arrive_cut_time;
	
	/** 
	 * 物流到货时效，单位天
	 **/
	public $arrive_interval;
	
	/** 
	 * 组合商品
	 **/
	public $assembly;
	
	/** 
	 * 同步到卖家库的时间，taobao.trades.sold.incrementv.get接口返回此字段
	 **/
	public $async_modified;
	
	/** 
	 * 交易中剩余的确认收货金额（这个金额会随着子订单确认收货而不断减少，交易成功后会变为零）。精确到2位小数;单位:元。如:200.07，表示:200 元7分
	 **/
	public $available_confirm_fee;
	
	/** 
	 * 买家支付宝账号
	 **/
	public $buyer_alipay_no;
	
	/** 
	 * 买家下单的地区
	 **/
	public $buyer_area;
	
	/** 
	 * 买家货到付款服务费。精确到2位小数;单位:元。如:12.07，表示:12元7分
	 **/
	public $buyer_cod_fee;
	
	/** 
	 * 买家邮件地址
	 **/
	public $buyer_email;
	
	/** 
	 * 买家备注旗帜（与淘宝网上订单的买家备注旗帜对应，只有买家才能查看该字段）红、黄、绿、蓝、紫 分别对应 1、2、3、4、5
	 **/
	public $buyer_flag;
	
	/** 
	 * 买家下单的IP信息，仅供taobao.trade.fullinfo.get查询返回。需要对返回结果进行Base64解码。
	 **/
	public $buyer_ip;
	
	/** 
	 * 买家备注（与淘宝网上订单的买家备注对应，只有买家才能查看该字段）
	 **/
	public $buyer_memo;
	
	/** 
	 * 买家留言
	 **/
	public $buyer_message;
	
	/** 
	 * 买家昵称
	 **/
	public $buyer_nick;
	
	/** 
	 * 买家获得积分,返点的积分。格式:100;单位:个。返点的积分要交易成功之后才能获得。
	 **/
	public $buyer_obtain_point_fee;
	
	/** 
	 * 买家是否已评价。可选值:true(已评价),false(未评价)。如买家只评价未打分，此字段仍返回false
	 **/
	public $buyer_rate;
	
	/** 
	 * 买家可以通过此字段查询是否当前交易可以评论，can_rate=true可以评价，false则不能评价。
	 **/
	public $can_rate;
	
	/** 
	 * 货到付款服务费。精确到2位小数;单位:元。如:12.07，表示:12元7分。
	 **/
	public $cod_fee;
	
	/** 
	 * 货到付款物流状态。初始状态 NEW_CREATED,接单成功 ACCEPTED_BY_COMPANY,接单失败 REJECTED_BY_COMPANY,接单超时 RECIEVE_TIMEOUT,揽收成功 TAKEN_IN_SUCCESS,揽收失败 TAKEN_IN_FAILED,揽收超时 TAKEN_TIMEOUT,签收成功 SIGN_IN,签收失败 REJECTED_BY_OTHER_SIDE,订单等待发送给物流公司 WAITING_TO_BE_SENT,用户取消物流订单 CANCELED
	 **/
	public $cod_status;
	
	/** 
	 * 交易佣金。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $commission_fee;
	
	/** 
	 * 物流发货时效，单位小时
	 **/
	public $consign_interval;
	
	/** 
	 * 卖家发货时间。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $consign_time;
	
	/** 
	 * 订单中使用红包付款的金额
	 **/
	public $coupon_fee;
	
	/** 
	 * 交易创建时间。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $created;
	
	/** 
	 * 使用信用卡支付金额数
	 **/
	public $credit_card_fee;
	
	/** 
	 * 跨境订单
	 **/
	public $cross_bonded_declare;
	
	/** 
	 * 聚划算火拼标记
	 **/
	public $delay_create_delivery;
	
	/** 
	 * 可以使用trade.promotion_details查询系统优惠系统优惠金额（如打折，VIP，满就送等），精确到2位小数，单位：元。如：200.07，表示：200元7分
	 **/
	public $discount_fee;
	
	/** 
	 * (encrypt)买家的支付宝id号，在UIC中有记录，买家支付宝的唯一标示，不因为买家更换Email账号而改变。
	 **/
	public $encrypt_alipay_id;
	
	/** 
	 * 交易结束时间。交易成功时间(更新交易状态为成功的同时更新)/确认收货时间或者交易关闭时间 。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $end_time;
	
	/** 
	 * 时间
	 **/
	public $es_date;
	
	/** 
	 * 时间段
	 **/
	public $es_range;
	
	/** 
	 * 商家的预计发货时间
	 **/
	public $est_con_time;
	
	/** 
	 * 车牌号码
	 **/
	public $et_plate_number;
	
	/** 
	 * 天猫汽车服务预约时间
	 **/
	public $et_ser_time;
	
	/** 
	 * 扫码购关联门店
	 **/
	public $et_shop_id;
	
	/** 
	 * 电子凭证预约门店地址
	 **/
	public $et_shop_name;
	
	/** 
	 * 电子凭证扫码购-扫码支付订单type
	 **/
	public $et_type;
	
	/** 
	 * 电子凭证核销门店地址
	 **/
	public $et_verified_shop_name;
	
	/** 
	 * 电子凭证的垂直信息
	 **/
	public $eticket_ext;
	
	/** 
	 * 天猫电子凭证家装
	 **/
	public $eticket_service_addr;
	
	/** 
	 * 快递代收款。精确到2位小数;单位:元。如:212.07，表示:212元7分
	 **/
	public $express_agency_fee;
	
	/** 
	 * 聚划算一起买字段
	 **/
	public $forbid_consign;
	
	/** 
	 * 判断订单是否有买家留言，有买家留言返回true，否则返回false
	 **/
	public $has_buyer_message;
	
	/** 
	 * 是否包含邮费。与available_confirm_fee同时使用。可选值:true(包含),false(不包含)
	 **/
	public $has_post_fee;
	
	/** 
	 * 订单中是否包含运费险订单，如果包含运费险订单返回true，不包含运费险订单，返回false
	 **/
	public $has_yfx;
	
	/** 
	 * 出生日期
	 **/
	public $hk_birthday;
	
	/** 
	 * 证件号码
	 **/
	public $hk_card_code;
	
	/** 
	 * 证件类型001代表港澳通行证类型、002代表入台证003代表护照
	 **/
	public $hk_card_type;
	
	/** 
	 * 中文名
	 **/
	public $hk_china_name;
	
	/** 
	 * 拼音名
	 **/
	public $hk_en_name;
	
	/** 
	 * 航班飞行时间
	 **/
	public $hk_flight_date;
	
	/** 
	 * 航班号
	 **/
	public $hk_flight_no;
	
	/** 
	 * 性别M: 男性，F: 女性
	 **/
	public $hk_gender;
	
	/** 
	 * 提货地点
	 **/
	public $hk_pickup;
	
	/** 
	 * 提货地点id
	 **/
	public $hk_pickup_id;
	
	/** 
	 * 采购订单标识
	 **/
	public $identity;
	
	/** 
	 * 商品字符串编号(注意：iid近期即将废弃，请用num_iid参数)
	 **/
	public $iid;
	
	/** 
	 * 发票类型（ 1 电子发票 2  纸质发票 ）
	 **/
	public $invoice_kind;
	
	/** 
	 * 发票抬头
	 **/
	public $invoice_name;
	
	/** 
	 * 发票类型
	 **/
	public $invoice_type;
	
	/** 
	 * 是否3D交易
	 **/
	public $is3_d;
	
	/** 
	 * 表示是否是品牌特卖（常规特卖，不包括特卖惠和特实惠）订单，如果是返回true，如果不是返回false。当此字段与is_force_wlb均为true时，订单强制物流宝发货。
	 **/
	public $is_brand_sale;
	
	/** 
	 * 表示订单交易是否含有对应的代销采购单。如果该订单中存在一个对应的代销采购单，那么该值为true；反之，该值为false。
	 **/
	public $is_daixiao;
	
	/** 
	 * 订单是否强制使用物流宝发货。当此字段与is_brand_sale均为true时，订单强制物流宝发货。此字段为false时，该订单根据流转规则设置可以使用物流宝或者常规方式发货
	 **/
	public $is_force_wlb;
	
	/** 
	 * 是否保障速递，如果为true，则为保障速递订单，使用线下联系发货接口发货，如果未false，则该订单非保障速递，根据卖家设置的订单流转规则可使用物流宝或者常规物流发货。
	 **/
	public $is_lgtype;
	
	/** 
	 * 是否是多次发货的订单如果卖家对订单进行多次发货，则为true否则为false
	 **/
	public $is_part_consign;
	
	/** 
	 * 是否屏蔽发货
	 **/
	public $is_sh_ship;
	
	/** 
	 * 表示订单交易是否网厅订单。 如果该订单是网厅订单，那么该值为true；反之，该值为false。
	 **/
	public $is_wt;
	
	/** 
	 * 次日达订单送达时间
	 **/
	public $lg_aging;
	
	/** 
	 * 次日达，三日达等送达类型
	 **/
	public $lg_aging_type;
	
	/** 
	 * 订单出现异常问题的时候，给予用户的描述,没有异常的时候，此值为空
	 **/
	public $mark_desc;
	
	/** 
	 * 垂直市场
	 **/
	public $market;
	
	/** 
	 * 交易修改时间(用户对订单的任何修改都会更新此字段)。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $modified;
	
	/** 
	 * 商品购买数量。取值范围：大于零的整数,对于一个trade对应多个order的时候（一笔主订单，对应多笔子订单），num=0，num是一个跟商品关联的属性，一笔订单对应多比子订单的时候，主订单上的num无意义。
	 **/
	public $num;
	
	/** 
	 * 商品数字编号
	 **/
	public $num_iid;
	
	/** 
	 * 卡易售垂直表信息，去除下单ip之后的结果
	 **/
	public $nut_feature;
	
	/** 
	 * 导购宝=crm
	 **/
	public $o2o;
	
	/** 
	 * 导购宝提货方式，inshop：店内提货，online：线上发货
	 **/
	public $o2o_delivery;
	
	/** 
	 * 分阶段交易的特权定金订单ID
	 **/
	public $o2o_et_order_id;
	
	/** 
	 * 导购员id
	 **/
	public $o2o_guide_id;
	
	/** 
	 * 导购员名称
	 **/
	public $o2o_guide_name;
	
	/** 
	 * 外部订单号
	 **/
	public $o2o_out_trade_id;
	
	/** 
	 * 导购员门店id
	 **/
	public $o2o_shop_id;
	
	/** 
	 * 导购门店名称
	 **/
	public $o2o_shop_name;
	
	/** 
	 * 抢单状态0,未处理待分发;1,抢单中;2,已抢单;3,已发货;-1,超时;-2,处理异常;-3,匹配失败;-4,取消抢单;-5,退款取消;-9,逻辑删除
	 **/
	public $o2o_snatch_status;
	
	/** 
	 * 特权定金订单的尾款订单ID
	 **/
	public $o2o_step_order_id;
	
	/** 
	 * 组装O2O多阶段尾款订单的明细数据 总阶段数，当前阶数，阶段金额（单位：分），支付状态，例如 3_1_100_paid ; 3_2_2000_nopaid
	 **/
	public $o2o_step_trade_detail;
	
	/** 
	 * 分阶段订单的特权定金抵扣金额，单位：分
	 **/
	public $o2o_voucher_price;
	
	/** 
	 * 门店预约自提订单标
	 **/
	public $obs;
	
	/** 
	 * 天猫国际拦截
	 **/
	public $ofp_hold;
	
	/** 
	 * 星盘标识字段
	 **/
	public $omni_attr;
	
	/** 
	 * 星盘业务字段
	 **/
	public $omni_param;
	
	/** 
	 * 全渠道商品通相关字段
	 **/
	public $omnichannel_param;
	
	/** 
	 * 天猫国际官网直供主订单关税税费
	 **/
	public $order_tax_fee;
	
	/** 
	 * 天猫国际计税优惠金额
	 **/
	public $order_tax_promotion_fee;
	
	/** 
	 * 订单列表
	 **/
	public $orders;
	
	/** 
	 * 时间
	 **/
	public $os_date;
	
	/** 
	 * 时间段
	 **/
	public $os_range;
	
	/** 
	 * 满返红包的金额；如果没有满返红包，则值为 0.00
	 **/
	public $paid_coupon_fee;
	
	/** 
	 * 付款时间。格式:yyyy-MM-dd HH:mm:ss。订单的付款时间即为物流订单的创建时间。
	 **/
	public $pay_time;
	
	/** 
	 * 实付金额。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $payment;
	
	/** 
	 * 天猫点券卡实付款金额,单位分
	 **/
	public $pcc_af;
	
	/** 
	 * 商品图片绝对途径
	 **/
	public $pic_path;
	
	/** 
	 * 买家使用积分,下单时生成，且一直不变。格式:100;单位:个.
	 **/
	public $point_fee;
	
	/** 
	 * 邮费。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $post_fee;
	
	/** 
	 * 邮关订单
	 **/
	public $post_gate_declare;
	
	/** 
	 * 商品价格。精确到2位小数；单位：元。如：200.07，表示：200元7分
	 **/
	public $price;
	
	/** 
	 * 交易促销详细信息
	 **/
	public $promotion;
	
	/** 
	 * 优惠详情
	 **/
	public $promotion_details;
	
	/** 
	 * 买家实际使用积分（扣除部分退款使用的积分），交易完成后生成（交易成功或关闭），交易未完成时该字段值为0。格式:100;单位:个
	 **/
	public $real_point_fee;
	
	/** 
	 * 卖家实际收到的支付宝打款金额（由于子订单可以部分确认收货，这个金额会随着子订单的确认收货而不断增加，交易成功后等于买家实付款减去退款金额）。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $received_payment;
	
	/** 
	 * 收货人的详细地址
	 **/
	public $receiver_address;
	
	/** 
	 * 收货人的所在城市<br/>注：因为国家对于城市和地区的划分的有：省直辖市和省直辖县级行政区（区级别的）划分的，淘宝这边根据这个差异保存在不同字段里面比如：广东广州：广州属于一个直辖市是放在的receiver_city的字段里面；而河南济源：济源属于省直辖县级行政区划分，是区级别的，放在了receiver_district里面<br/>建议：程序依赖于城市字段做物流等判断的操作，最好加一个判断逻辑：如果返回值里面只有receiver_district参数，该参数作为城市
	 **/
	public $receiver_city;
	
	/** 
	 * 收货人国籍
	 **/
	public $receiver_country;
	
	/** 
	 * 收货人的所在地区<br/>注：因为国家对于城市和地区的划分的有：省直辖市和省直辖县级行政区（区级别的）划分的，淘宝这边根据这个差异保存在不同字段里面比如：广东广州：广州属于一个直辖市是放在的receiver_city的字段里面；而河南济源：济源属于省直辖县级行政区划分，是区级别的，放在了receiver_district里面<br/>建议：程序依赖于城市字段做物流等判断的操作，最好加一个判断逻辑：如果返回值里面只有receiver_district参数，该参数作为城市
	 **/
	public $receiver_district;
	
	/** 
	 * 收货人的手机号码
	 **/
	public $receiver_mobile;
	
	/** 
	 * 收货人的姓名
	 **/
	public $receiver_name;
	
	/** 
	 * 收货人的电话号码
	 **/
	public $receiver_phone;
	
	/** 
	 * 收货人的所在省份
	 **/
	public $receiver_state;
	
	/** 
	 * 收货人街道地址
	 **/
	public $receiver_town;
	
	/** 
	 * 收货人的邮编
	 **/
	public $receiver_zip;
	
	/** 
	 * 处方药未审核状态
	 **/
	public $rx_audit_status;
	
	/** 
	 * 卖家支付宝账号
	 **/
	public $seller_alipay_no;
	
	/** 
	 * 卖家是否可以对订单进行评价
	 **/
	public $seller_can_rate;
	
	/** 
	 * 卖家货到付款服务费。精确到2位小数;单位:元。如:12.07，表示:12元7分。卖家不承担服务费的订单：未发货的订单获取服务费为0，发货后就能获取到正确值。
	 **/
	public $seller_cod_fee;
	
	/** 
	 * 卖家邮件地址
	 **/
	public $seller_email;
	
	/** 
	 * 卖家备注旗帜（与淘宝网上订单的卖家备注旗帜对应，只有卖家才能查看该字段）红、黄、绿、蓝、紫 分别对应 1、2、3、4、5
	 **/
	public $seller_flag;
	
	/** 
	 * 卖家备注（与淘宝网上订单的卖家备注对应，只有卖家才能查看该字段）
	 **/
	public $seller_memo;
	
	/** 
	 * 卖家手机
	 **/
	public $seller_mobile;
	
	/** 
	 * 卖家姓名
	 **/
	public $seller_name;
	
	/** 
	 * 卖家昵称
	 **/
	public $seller_nick;
	
	/** 
	 * 卖家电话
	 **/
	public $seller_phone;
	
	/** 
	 * 卖家是否已评价。可选值:true(已评价),false(未评价)
	 **/
	public $seller_rate;
	
	/** 
	 * 订单将在此时间前发出，主要用于预售订单
	 **/
	public $send_time;
	
	/** 
	 * 服务子订单列表
	 **/
	public $service_orders;
	
	/** 
	 * 物流标签
	 **/
	public $service_tags;
	
	/** 
	 * serviceType
	 **/
	public $service_type;
	
	/** 
	 * shareGroupHold
	 **/
	public $share_group_hold;
	
	/** 
	 * 创建交易时的物流方式（交易完成前，物流方式有可能改变，但系统里的这个字段一直不变）。可选值：free(卖家包邮),post(平邮),express(快递),ems(EMS),virtual(虚拟发货)，25(次日必达)，26(预约配送)。
	 **/
	public $shipping_type;
	
	/** 
	 * 线下自提门店编码
	 **/
	public $shop_code;
	
	/** 
	 * 门店自提，总店发货，分店取货的门店自提订单标识
	 **/
	public $shop_pick;
	
	/** 
	 * 物流运单号
	 **/
	public $sid;
	
	/** 
	 * 交易快照详细信息
	 **/
	public $snapshot;
	
	/** 
	 * 交易快照地址
	 **/
	public $snapshot_url;
	
	/** 
	 * 交易状态。可选值:    * TRADE_NO_CREATE_PAY(没有创建支付宝交易)    * WAIT_BUYER_PAY(等待买家付款)    * SELLER_CONSIGNED_PART(卖家部分发货)    * WAIT_SELLER_SEND_GOODS(等待卖家发货,即:买家已付款)    * WAIT_BUYER_CONFIRM_GOODS(等待买家确认收货,即:卖家已发货)    * TRADE_BUYER_SIGNED(买家已签收,货到付款专用)    * TRADE_FINISHED(交易成功)    * TRADE_CLOSED(付款以后用户退款成功，交易自动关闭)    * TRADE_CLOSED_BY_TAOBAO(付款以前，卖家或买家主动关闭交易)    * PAY_PENDING(国际信用卡支付付款确认中)    * WAIT_PRE_AUTH_CONFIRM(0元购合约中)
	 **/
	public $status;
	
	/** 
	 * 分阶段付款的已付金额（万人团订单已付金额）
	 **/
	public $step_paid_fee;
	
	/** 
	 * 分阶段付款的订单状态（例如万人团订单等），目前有三返回状态FRONT_NOPAID_FINAL_NOPAID(定金未付尾款未付)，FRONT_PAID_FINAL_NOPAID(定金已付尾款未付)，FRONT_PAID_FINAL_PAID(定金和尾款都付)
	 **/
	public $step_trade_status;
	
	/** 
	 * 天猫拼团拦截标示
	 **/
	public $team_buy_hold;
	
	/** 
	 * 交易编号 (父订单的交易编号)
	 **/
	public $tid;
	
	/** 
	 * 同tid
	 **/
	public $tid_str;
	
	/** 
	 * 超时到期时间。格式:yyyy-MM-dd HH:mm:ss。业务规则：前提条件：只有在买家已付款，卖家已发货的情况下才有效如果申请了退款，那么超时会落在子订单上；比如说3笔ABC，A申请了，那么返回的是BC的列表, 主定单不存在如果没有申请过退款，那么超时会挂在主定单上；比如ABC，返回主定单，ABC的超时和主定单相同
	 **/
	public $timeout_action_time;
	
	/** 
	 * 交易标题，以店铺名作为此标题的值。注:taobao.trades.get接口返回的Trade中的title是商品名称
	 **/
	public $title;
	
	/** 
	 * TOP拦截标识，0不拦截，1拦截
	 **/
	public $top_hold;
	
	/** 
	 * top定义订单类型
	 **/
	public $toptype;
	
	/** 
	 * 商品金额（商品价格乘以数量的总金额）。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $total_fee;
	
	/** 
	 * top动态字段
	 **/
	public $trade_attr;
	
	/** 
	 * 交易扩展表信息
	 **/
	public $trade_ext;
	
	/** 
	 * 交易内部来源。WAP(手机);HITAO(嗨淘);TOP(TOP平台);TAOBAO(普通淘宝);JHS(聚划算)一笔订单可能同时有以上多个标记，则以逗号分隔
	 **/
	public $trade_from;
	
	/** 
	 * 交易备注。
	 **/
	public $trade_memo;
	
	/** 
	 * 交易外部来源：ownshop(商家官网)
	 **/
	public $trade_source;
	
	/** 
	 * 交易类型列表，同时查询多种交易类型可用逗号分隔。默认同时查询guarantee_trade, auto_delivery, ec, cod的4种交易类型的数据 可选值 fixed(一口价) auction(拍卖) guarantee_trade(一口价、拍卖) auto_delivery(自动发货) independent_simple_trade(旺店入门版交易) independent_shop_trade(旺店标准版交易) ec(直冲) cod(货到付款) fenxiao(分销) game_equipment(游戏装备) shopex_trade(ShopEX交易) netcn_trade(万网交易) external_trade(统一外部交易)o2o_offlinetrade（O2O交易）step (万人团)nopaid(无付款订单)pre_auth_type(预授权0元购机交易)
	 **/
	public $type;
	
	/** 
	 * 订单的运费险，单位为元
	 **/
	public $yfx_fee;
	
	/** 
	 * 运费险支付号
	 **/
	public $yfx_id;
	
	/** 
	 * 运费险类型
	 **/
	public $yfx_type;
	
	/** 
	 * 在返回的trade对象上专门增加一个字段zero_purchase来区分，这个为true的就是0元购机预授权交易
	 **/
	public $zero_purchase;	
}
?>