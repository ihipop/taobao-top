<?php

/**
 * 批次库存查询结果记录
 * @author auto create
 */
class WlbItemBatch
{
	
	/** 
	 * 批次编号
	 **/
	public $batch_code;
	
	/** 
	 * 创建者
	 **/
	public $creator;
	
	/** 
	 * 残次数量
	 **/
	public $defect_quantity;
	
	/** 
	 * 到期时间
	 **/
	public $due_date;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 最后修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 保质期
	 **/
	public $guarantee_period;
	
	/** 
	 * 天（单位）
	 **/
	public $guarantee_unit;
	
	/** 
	 * 商品批次记录id
	 **/
	public $id;
	
	/** 
	 * 是否删除。0：正常 1：删除
	 **/
	public $is_deleted;
	
	/** 
	 * 商品id
	 **/
	public $item_id;
	
	/** 
	 * 最后修改者
	 **/
	public $last_modifier;
	
	/** 
	 * 产地
	 **/
	public $produce_area;
	
	/** 
	 * 生产编号
	 **/
	public $produce_code;
	
	/** 
	 * 生产日期
	 **/
	public $produce_date;
	
	/** 
	 * 商品数量
	 **/
	public $quantity;
	
	/** 
	 * 接受日期
	 **/
	public $receive_date;
	
	/** 
	 * 描述
	 **/
	public $remarks;
	
	/** 
	 * 状态。item_batch_status_open:开放 item_batch_status_lock:冻结 item_batch_status_invalid:无效
	 **/
	public $status;
	
	/** 
	 * 存储类型
	 **/
	public $store_code;
	
	/** 
	 * 用户id
	 **/
	public $user_id;
	
	/** 
	 * 版本
	 **/
	public $version;	
}
?>