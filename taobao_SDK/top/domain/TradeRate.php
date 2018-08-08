<?php

/**
 * 评价列表
 * @author auto create
 */
class TradeRate
{
	
	/** 
	 * 评价内容,最大长度:500个汉字
	 **/
	public $content;
	
	/** 
	 * 评价创建时间,格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $created;
	
	/** 
	 * 商品价格,精确到2位小数;单位:元.如:200.07，表示:200元7分
	 **/
	public $item_price;
	
	/** 
	 * 商品标题
	 **/
	public $item_title;
	
	/** 
	 * 评价者昵称
	 **/
	public $nick;
	
	/** 
	 * 商品的数字ID
	 **/
	public $num_iid;
	
	/** 
	 * 子订单ID
	 **/
	public $oid;
	
	/** 
	 * 被评价者昵称
	 **/
	public $rated_nick;
	
	/** 
	 * 评价解释,最大长度:500个汉字
	 **/
	public $reply;
	
	/** 
	 * 评价结果,可选值:good(好评),neutral(中评),bad(差评)
	 **/
	public $result;
	
	/** 
	 * 评价者角色.可选值:seller(卖家),buyer(买家)
	 **/
	public $role;
	
	/** 
	 * 交易ID
	 **/
	public $tid;
	
	/** 
	 * 评价信息是否用于记分，
可取值：true(参与记分)和false(不参与记分)
	 **/
	public $valid_score;	
}
?>