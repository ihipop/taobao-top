<?php

/**
 * 面单详情
 * @author auto create
 */
class WaybillDetailQueryInfo
{
	
	/** 
	 * 收货人地址
	 **/
	public $consignee_address;
	
	/** 
	 * 包裹对应的派件（收件）物流服务商网点（分支机构）代码
	 **/
	public $consignee_branch_code;
	
	/** 
	 * 包裹对应的派件（收件）物流服务商网点（分支机构）名称
	 **/
	public $consignee_branch_name;
	
	/** 
	 * 收件人姓名
	 **/
	public $consignee_name;
	
	/** 
	 * 收件人联系方式
	 **/
	public $consignee_phone;
	
	/** 
	 * 物流商编码CODE
	 **/
	public $cp_code;
	
	/** 
	 * 创建时间
	 **/
	public $create_time;
	
	/** 
	 * 最后一次打印时间
	 **/
	public $last_print_time;
	
	/** 
	 * 物流服务能力集合
	 **/
	public $logistics_service_list;
	
	/** 
	 * 集包地、目的地中心代码。打印时根据该 code 生成目的地中心的条码，条码生成的算法与对应的电子面单条码一致
	 **/
	public $package_center_code;
	
	/** 
	 * 集包地、目的地中心名称
	 **/
	public $package_center_name;
	
	/** 
	 * ERP订单号或包裹号
	 **/
	public $package_id;
	
	/** 
	 * 包裹里面的商品类型
	 **/
	public $package_items;
	
	/** 
	 * 揽收时间
	 **/
	public $pickup_time;
	
	/** 
	 * 打印配置项
	 **/
	public $print_config;
	
	/** 
	 * 打印次数
	 **/
	public $print_count;
	
	/** 
	 * 快递服务产品类型编码
	 **/
	public $product_type;
	
	/** 
	 * 使用者ID
	 **/
	public $real_user_id;
	
	/** 
	 * 发件人姓名
	 **/
	public $send_name;
	
	/** 
	 * 发件人联系方式
	 **/
	public $send_phone;
	
	/** 
	 * 发货地址
	 **/
	public $shipping_address;
	
	/** 
	 * 发货网点编码
	 **/
	public $shipping_branch_code;
	
	/** 
	 * 发货网点信息
	 **/
	public $shipping_branch_name;
	
	/** 
	 * 大头笔信息
	 **/
	public $short_address;
	
	/** 
	 * 签收时间
	 **/
	public $sign_time;
	
	/** 
	 * 面单状态
	 **/
	public $status;
	
	/** 
	 * 交易订单列表
	 **/
	public $trade_order_list;
	
	/** 
	 * 包裹重量 单位为G(克)
	 **/
	public $volume;
	
	/** 
	 * 电子面单信息
	 **/
	public $waybill_code;
	
	/** 
	 * 包裹体积 单位为ML(毫升)或立方厘米
	 **/
	public $weight;	
}
?>