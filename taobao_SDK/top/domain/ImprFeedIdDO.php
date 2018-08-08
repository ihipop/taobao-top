<?php

/**
 * 单条交易子订单语义标签对象
 * @author auto create
 */
class ImprFeedIdDO
{
	
	/** 
	 * 存放主评和追评的评价标签信息
biz_type(1:主评 2:追评)
	 **/
	public $feed_info_list;
	
	/** 
	 * 被评价者昵称
	 **/
	public $nick;
	
	/** 
	 * 评价结果（1好评 0中评 -1差评）
	 **/
	public $rate;	
}
?>