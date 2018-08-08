<?php

/**
 * 发票信息
 * @author auto create
 */
class Invoicewlbwmsconsignordernotify
{
	
	/** 
	 * 发票金额
	 **/
	public $bill_account;
	
	/** 
	 * 发票内容
	 **/
	public $bill_content;
	
	/** 
	 * Erp发票ID
	 **/
	public $bill_id;
	
	/** 
	 * 发票抬头
	 **/
	public $bill_title;
	
	/** 
	 * 发票类型(VINVOICE - 增值税普通发票， EVINVOICE - 电子增票，电子发票仓库不打印)
	 **/
	public $bill_type;
	
	/** 
	 * 发票明细列表
	 **/
	public $detail_list;	
}
?>