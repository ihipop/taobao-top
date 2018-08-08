<?php

/**
 * 物流宝订单，并且包含订单详情
 * @author auto create
 */
class WlbOrderDetail
{
	
	/** 
	 * 如果是交易单，则显示交易中买家昵称
	 **/
	public $buyer_nick;
	
	/** 
	 * 订单创建时间
	 **/
	public $create_time;
	
	/** 
	 * 是否已全部完成
	 **/
	public $is_completed;
	
	/** 
	 * 订单最后一次修改时间
	 **/
	public $modify_time;
	
	/** 
	 * 出库或者入库，IN表示入库，OUT表示出库
	 **/
	public $operate_type;
	
	/** 
	 * 订单编码
	 **/
	public $order_code;
	
	/** 
	 * 物流宝订单对应的商品详情
	 **/
	public $order_item_list;
	
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
接收方拒签 :-100
已发货:100
签收成功:200
	 **/
	public $order_status;
	
	/** 
	 * (1)其它:    OTHER
(2)淘宝交易: TAOBAO
(3)301:调拨: ALLOCATION
(4)401:盘点:CHECK
(5)501:销售采购:PRUCHASE
	 **/
	public $order_sub_type;
	
	/** 
	 * 1:正常订单: NARMAL
2:退货订单: RETURN
3:换货订单: CHANGE
	 **/
	public $order_type;
	
	/** 
	 * 订单备注
	 **/
	public $remark;
	
	/** 
	 * 仓库编码
	 **/
	public $store_code;
	
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