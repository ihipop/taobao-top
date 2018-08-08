<?php

/**
 * 更新请求信息
 * @author auto create
 */
class WaybillCloudPrintUpdateRequest
{
	
	/** 
	 * 物流公司CODE
	 **/
	public $cp_code;
	
	/** 
	 * 物流服务内容<a href="http://open.taobao.com/doc2/detail.htm?spm=a219a.7629140.0.0.eK8aZm&treeId=17&articleId=26765&docType=2">链接</a>
	 **/
	public $logistics_services;
	
	/** 
	 * 请求表示id
	 **/
	public $object_id;
	
	/** 
	 * 包裹信息
	 **/
	public $package_info;
	
	/** 
	 * 收件信息
	 **/
	public $recipient;
	
	/** 
	 * 发件信息
	 **/
	public $sender;
	
	/** 
	 * 模板URL
	 **/
	public $template_url;
	
	/** 
	 * 面单号
	 **/
	public $waybill_code;	
}
?>