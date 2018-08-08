<?php

/**
 * 产品规格审核信息
 * @author auto create
 */
class Ticket
{
	
	/** 
	 * 如果产品规格，需要商家审核，为商家审核用户ID
	 **/
	public $audit_seller_id;
	
	/** 
	 * 创建人ID
	 **/
	public $create_user_id;
	
	/** 
	 * 产品规格申请时间
	 **/
	public $gmt_create;
	
	/** 
	 * 产品规格审核单最后修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 关于审核原因，更详细的说明
	 **/
	public $memo;
	
	/** 
	 * 审核原因
	 **/
	public $reason;
	
	/** 
	 * 产品规格ID
	 **/
	public $spec_id;
	
	/** 
	 * 1, "商家确认"
2, "商家拒绝"
3, "小二确认"
4, "小二拒绝"
5, "待商家处理"
6, "商家审核超时"
7, "待小二审核"
9, "品牌商确认"
10, "免审通过"
14, "免审拒绝"
	 **/
	public $status;	
}
?>