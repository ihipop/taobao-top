<?php

/**
 * 门票商品操作结果
 * @author auto create
 */
class TicketItemProcessResult
{
	
	/** 
	 * 商品操作流程是否被迫终止。
如果broken==false则表示成功发布商品，则通过item_id字段获取新生成商品id；
如果broken==true则表示发布商品遇到问题，则通过broken_reasons字段获取到失败原因。
	 **/
	public $broken;
	
	/** 
	 * 操作商品遇到的错误原因
	 **/
	public $broken_reasons;
	
	/** 
	 * 成功操作的商品标识
	 **/
	public $item_id;	
}
?>