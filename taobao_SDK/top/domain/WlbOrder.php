<?php

/**
 * 物流宝订单对象
 * @author auto create
 */
class WlbOrder
{
	
	/** 
	 * 买家nick
	 **/
	public $buyer_nick;
	
	/** 
	 * 订单取消状态：
1-取消中； 
2-取消失败；
3-取消完成
	 **/
	public $cancel_order_status;
	
	/** 
	 * 确认状态：
(1)不需要确认：NO_NEED_CONFIRM
(2)等待确认：WAIT_CONFIRM
(3)已确认:CONFIRMED
	 **/
	public $confirm_status;
	
	/** 
	 * 计划送达结束时间
	 **/
	public $expect_end_time;
	
	/** 
	 * 计划送达开始时间
	 **/
	public $expect_start_time;
	
	/** 
	 * 
	 **/
	public $ext_order_id;
	
	/** 
	 * 发票信息
	 **/
	public $invoice_info;
	
	/** 
	 * 
	 **/
	public $is_completed;
	
	/** 
	 * 物流宝订单中的商品种类数量
	 **/
	public $item_kinds_count;
	
	/** 
	 * 出库或者入库，IN表示入库，OUT表示出库
	 **/
	public $operate_type;
	
	/** 
	 * 订单编码
	 **/
	public $order_code;
	
	/** 
	 * 第1位:COD,2:限时配送,3:预售,4:需要发票,5:已投诉,第6位:合单,第7位:拆单 第8位：EXCHANGE-换货， 第9位:VISIT-上门 ， 第10位: MODIFYTRANSPORT-是否可改配送方式，第11位：是否物流代理确认发货
	 **/
	public $order_flag;
	
	/** 
	 * 订单来源:
产生物流订单的原因，比如:

订单来源:1:TAOBAO;2:EXT;3:ERP;4:WMS
	 **/
	public $order_source;
	
	/** 
	 * 对应创建物流宝订单top接口中的的out_biz_code字段，主要是用来去重用
	 **/
	public $order_source_code;
	
	/** 
	 * 物流状态，
订单已创建：0
订单已取消: -1
订单关闭:-3
下发中: 10
已下发: 11
TMS拒签 :-100
接收方拒签：-200
已发货:100
签收成功:200
	 **/
	public $order_status;
	
	/** 
	 * 卖家取消,仓库取消标识
	 **/
	public $order_status_reason;
	
	/** 
	 * (1)其它:    OTHER
(2)淘宝交易: TAOBAO
(3)301:调拨: ALLOCATION
(4)401:盘点:CHECK
(5)501:销售采购:PRUCHASE
	 **/
	public $order_sub_type;
	
	/** 
	 * 1:正常订单: NORMAL
2:退货订单: RETURN
3:换货订单: CHANGE
	 **/
	public $order_type;
	
	/** 
	 * 原订单编码
	 **/
	public $prev_order_code;
	
	/** 
	 * 实际入库的种类数量
	 **/
	public $real_kinds_count;
	
	/** 
	 * 应收金额
	 **/
	public $receivable_amount;
	
	/** 
	 * 收件人具体地址
	 **/
	public $receiver_address;
	
	/** 
	 * 区或者县
	 **/
	public $receiver_area;
	
	/** 
	 * 收件人城市
	 **/
	public $receiver_city;
	
	/** 
	 * 
	 **/
	public $receiver_email;
	
	/** 
	 * 接收人电子邮箱
	 **/
	public $receiver_mail;
	
	/** 
	 * 接收人手机号码
	 **/
	public $receiver_mobile;
	
	/** 
	 * 接收人姓名
	 **/
	public $receiver_name;
	
	/** 
	 * 接收人固定电话
	 **/
	public $receiver_phone;
	
	/** 
	 * 收件人省份
	 **/
	public $receiver_province;
	
	/** 
	 * 接收人旺旺
	 **/
	public $receiver_wangwang;
	
	/** 
	 * 收件人邮编
	 **/
	public $receiver_zip_code;
	
	/** 
	 * 订单备注
	 **/
	public $remark;
	
	/** 
	 * 发货日期:
(1)1 为工作日
(2)2 为节假日
	 **/
	public $schedule_day;
	
	/** 
	 * 配送结束时间通常是HH:MM格式
	 **/
	public $schedule_end;
	
	/** 
	 * 发货速度  ，
101-当日达，
102-次晨达，
103-次日达
	 **/
	public $schedule_speed;
	
	/** 
	 * 配送开始时间通常是HH:MM格式
	 **/
	public $schedule_start;
	
	/** 
	 * 发件人地址
	 **/
	public $sender_address;
	
	/** 
	 * 发件人所在区
	 **/
	public $sender_area;
	
	/** 
	 * 发件人城市
	 **/
	public $sender_city;
	
	/** 
	 * 发件人电子邮箱
	 **/
	public $sender_email;
	
	/** 
	 * 发件人移动电话
	 **/
	public $sender_mobile;
	
	/** 
	 * 发件人姓名
	 **/
	public $sender_name;
	
	/** 
	 * 发件人联系电话
	 **/
	public $sender_phone;
	
	/** 
	 * 发件人所在省份
	 **/
	public $sender_province;
	
	/** 
	 * 发件人邮编
	 **/
	public $sender_zip_code;
	
	/** 
	 * cod服务费
	 **/
	public $service_fee;
	
	/** 
	 * 物流运输方式：
MAIL-平邮
EXPRESS-快递
EMS-EMS
OTHER-其他
	 **/
	public $shipping_type;
	
	/** 
	 * 仓库编码
	 **/
	public $store_code;
	
	/** 
	 * 发货物流公司编码，STO,YTO,EMS等
	 **/
	public $tms_tp_code;
	
	/** 
	 * 订单总价
	 **/
	public $total_amount;
	
	/** 
	 * 卖家ID
	 **/
	public $user_id;
	
	/** 
	 * 卖家NICK
	 **/
	public $user_nick;	
}
?>