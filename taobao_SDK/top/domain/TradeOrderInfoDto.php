<?php

/**
 * 请求面单信息，数量限制为10
 * @author auto create
 */
class TradeOrderInfoDto
{
	
	/** 
	 * 服务值,传值方式见<a href="http://open.taobao.com/docs/doc.htm?spm=a219a.7629140.0.0.seE3Yp&treeId=17&articleId=106156&docType=1">链接</a>
	 **/
	public $logistics_services;
	
	/** 
	 * <a href="http://open.taobao.com/docs/doc.htm?docType=1&articleId=105086&treeId=17&platformId=17#6">请求ID</a>
	 **/
	public $object_id;
	
	/** 
	 * 订单信息
	 **/
	public $order_info;
	
	/** 
	 * 包裹信息
	 **/
	public $package_info;
	
	/** 
	 * 收件人信息
	 **/
	public $recipient;
	
	/** 
	 * 标准模板模板URL<a href="http://open.taobao.com/doc2/apiDetail.htm?apiId=26756">获取方式</a>,<a href="http://open.taobao.com/doc2/detail.htm?spm=a219a.7629140.0.0.Wl5ToC&treeId=17&articleId=105049&docType=1">打印组件使用文档</a>
	 **/
	public $template_url;
	
	/** 
	 * 使用者ID<a href="http://open.taobao.com/support/hotProblemDetail.htm?spm=a219a.7386793.0.0.4mwx9s&id=244622&tagId=">获取方式</a>
	 **/
	public $user_id;	
}
?>