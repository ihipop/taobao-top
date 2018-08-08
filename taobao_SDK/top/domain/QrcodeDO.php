<?php

/**
 * 系统自动生成
 * @author auto create
 */
class QrcodeDO
{
	
	/** 
	 * 二维码所属渠道ID
	 **/
	public $channel_id;
	
	/** 
	 * 二维码对应的渠道名
	 **/
	public $channel_name;
	
	/** 
	 * 二维码的矢量图下载地址，只有设置入参need_eps为true且style不为官方模板时，才返回值
	 **/
	public $eps_url;
	
	/** 
	 * 二维码id
	 **/
	public $qrcode_id;
	
	/** 
	 * 二维码图片链接
	 **/
	public $qrcode_url;
	
	/** 
	 * 二维码的短地址，每一个原始地址都会生成一个短地址
	 **/
	public $short_url;
	
	/** 
	 * 二维码扫码后访问的目的地址
	 **/
	public $url;	
}
?>