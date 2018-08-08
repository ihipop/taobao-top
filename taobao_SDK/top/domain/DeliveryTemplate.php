<?php

/**
 * 运费模板对象
 * @author auto create
 */
class DeliveryTemplate
{
	
	/** 
	 * 运费模板上设置的发货地址
	 **/
	public $address;
	
	/** 
	 * 可选值：0,1,2,3<br>,说明如下<br>
1)买家承担运费的模版<br>
0：买家承担服务费<br>
1: 卖家承担服务费<br>
2)卖家承担运费的模版<br>
2:卖家承担运费的模版（集市），卖家承担服务费<br>
3:卖家承担运费的模版（天猫），卖家承担服务费<br>
	 **/
	public $assumer;
	
	/** 
	 * 该模板上设置的卖家发货地址区域ID，如：address为浙江省杭州市西湖去文三路XX号那么这个consign_area_id的值就是西湖区的ID
	 **/
	public $consign_area_id;
	
	/** 
	 * 模板创建时间
	 **/
	public $created;
	
	/** 
	 * 运费模板中运费详细信息对象，包含默认运费和指定地区运费
	 **/
	public $fee_list;
	
	/** 
	 * 模板修改时间
	 **/
	public $modified;
	
	/** 
	 * 模板名称，长度不能超过25个字节
	 **/
	public $name;
	
	/** 
	 * 物流服务模板支持增值服务列表，多个用分号隔开。cod:货到付款 mops：刷卡付款
	 **/
	public $supports;
	
	/** 
	 * 模块ID
	 **/
	public $template_id;
	
	/** 
	 * 是否商超模版
	 **/
	public $template_type;
	
	/** 
	 * 可选值：0
说明：
0:表示按宝贝件数计算运费
<br/><br/>
1:表示按宝贝重量计算运费
<br/><br/>
3:表示按宝贝体积计算运费
	 **/
	public $valuation;	
}
?>