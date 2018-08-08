<?php

/**
 * 家装物流发货参数
 * @author auto create
 */
class JzConsignArgsNew
{
	
	/** 
	 * 快递运单号，serviceType=20 和serviceType=21时必填
	 **/
	public $mail_no;
	
	/** 
	 * 包裹数目
	 **/
	public $package_number;
	
	/** 
	 * 包裹备注信息
	 **/
	public $package_remark;
	
	/** 
	 * 包裹体积m3
	 **/
	public $package_volume;
	
	/** 
	 * 包裹重量kg
	 **/
	public $package_weight;
	
	/** 
	 * 物流公司名称，tmsPartner.virualType=true时必填
	 **/
	public $zy_company;
	
	/** 
	 * 发货时间，tmsPartner.virualType=true时必填
	 **/
	public $zy_consign_time;
	
	/** 
	 * 运单号，tmsPartner.virualType=true时必填
	 **/
	public $zy_mail_no;
	
	/** 
	 * 物流公司电话，tmsPartner.virualType=true时必填
	 **/
	public $zy_phone_number;	
}
?>