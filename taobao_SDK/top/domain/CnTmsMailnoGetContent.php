<?php

/**
 * 获取菜鸟配送电子面单请求参数
 * @author auto create
 */
class CnTmsMailnoGetContent
{
	
	/** 
	 * 菜鸟配指定CPCode
	 **/
	public $cncpcode;
	
	/** 
	 * 拓展字段
	 **/
	public $extend_field;
	
	/** 
	 * 发货商品信息
	 **/
	public $items;
	
	/** 
	 * ERP订单编码
	 **/
	public $order_code;
	
	/** 
	 * 来源渠道（TB 淘宝，JD 京东，TM 天猫，1688 1688（阿里中文站），YHD 1号店，DD 当当，VANCL 凡客，PP 拍拍，YX 易讯，EBAY 易贝ebay，AMAZON 亚马逊，SN 苏宁在线，GM 国美在线，WPH 唯品会，JM 聚美优品，LF 乐蜂网，MGJ 蘑菇街，JS 聚尚网，YG 优购，YT 银泰，YL 邮乐，PX 拍鞋网，POS POS门店，OTHERS 其他）
	 **/
	public $order_source;
	
	/** 
	 * 包裹序号,如果同一订单获取多个包裹时,需要标记当前请求为第几个包裹
	 **/
	public $package_no;
	
	/** 
	 * 收件人信息
	 **/
	public $receiver_info;
	
	/** 
	 * 发件人信息
	 **/
	public $sender_info;
	
	/** 
	 * 店铺编码
	 **/
	public $shop_code;
	
	/** 
	 * 解决方案CODE，由菜鸟提供
	 **/
	public $solutions_code;
	
	/** 
	 * 交易单号
	 **/
	public $trade_id;	
}
?>