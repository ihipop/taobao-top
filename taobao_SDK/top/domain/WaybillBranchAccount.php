<?php

/**
 * CP下的网点信息
 * @author auto create
 */
class WaybillBranchAccount
{
	
	/** 
	 * 已用单数
	 **/
	public $allocated_quantity;
	
	/** 
	 * 网点ID
	 **/
	public $branch_code;
	
	/** 
	 * 网点名称
	 **/
	public $branch_name;
	
	/** 
	 * 取消的面对总数
	 **/
	public $cancel_quantity;
	
	/** 
	 * 物流服务商ID
	 **/
	public $cp_code;
	
	/** 
	 * 已经打印的面单总数
	 **/
	public $print_quantity;
	
	/** 
	 * 可用单数
	 **/
	public $quantity;
	
	/** 
	 * 商家ID
	 **/
	public $seller_id;
	
	/** 
	 * 当前网点下的发货地址
	 **/
	public $shipp_address_cols;	
}
?>