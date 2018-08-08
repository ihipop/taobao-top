<?php

/**
 * 面单详情信息
 * @author auto create
 */
class PrintCheckInfo
{
	
	/** 
	 * 收\发货地址
	 **/
	public $consignee_address;
	
	/** 
	 * 收货网点编码
	 **/
	public $consignee_branch_code;
	
	/** 
	 * 收货网点信息
	 **/
	public $consignee_branch_name;
	
	/** 
	 * 收件人姓名
	 **/
	public $consignee_name;
	
	/** 
	 * consigneePhone
	 **/
	public $consignee_phone;
	
	/** 
	 * 物流服务能力集合
	 **/
	public $logistics_service_list;
	
	/** 
	 * 集包地、目的地中心代码。打 印时根据该 code 生成目的地 中心的条码，条码生成的算法 与对应的电子面单条码一致
	 **/
	public $package_center_code;
	
	/** 
	 * 集包地、目的地中心名称
	 **/
	public $package_center_name;
	
	/** 
	 * 打标设置字段，直接传给ali-lodop。不用管具体含义。
	 **/
	public $print_config;
	
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
	 * 收\发货地址
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
	 * 拣货规则（大头笔信息）
	 **/
	public $short_address;
	
	/** 
	 * 包裹体积 单位为ML(毫升)或立方厘米
	 **/
	public $volume;
	
	/** 
	 * 电子面单单号
	 **/
	public $waybill_code;
	
	/** 
	 * 包裹重量 单位为G(克)
	 **/
	public $weight;	
}
?>