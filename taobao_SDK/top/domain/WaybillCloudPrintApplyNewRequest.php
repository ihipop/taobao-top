<?php

/**
 * 入参信息
 * @author auto create
 */
class WaybillCloudPrintApplyNewRequest
{
	
	/** 
	 * <a href="http://open.taobao.com/doc2/detail.htm?spm=a219a.7629140.0.0.8cf9Nj&treeId=17&articleId=105085&docType=1#1">物流公司Code</a>
	 **/
	public $cp_code;
	
	/** 
	 * 是否使用智分宝预分拣， 仓库WMS系统对接落地配业务，其它场景请不要使用
	 **/
	public $dms_sorting;
	
	/** 
	 * 目前已经不推荐使用此字段，请不要使用
	 **/
	public $product_code;
	
	/** 
	 * 配送资源code， 仓库WMS系统对接落地配业务，其它场景请不要使用
	 **/
	public $resource_code;
	
	/** 
	 * 发货人信息
	 **/
	public $sender;
	
	/** 
	 * 仓code， 仓库WMS系统对接落地配业务，其它场景请不要使用
	 **/
	public $store_code;
	
	/** 
	 * 请求面单信息，数量限制为10
	 **/
	public $trade_order_info_dtos;	
}
?>