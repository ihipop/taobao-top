<?php

/**
 * 退款留言
 * @author auto create
 */
class RefundMessage
{
	
	/** 
	 * 留言内容。最大长度: 400个字节
	 **/
	public $content;
	
	/** 
	 * 留言创建时间。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $created;
	
	/** 
	 * 留言编号
	 **/
	public $id;
	
	/** 
	 * 退款类型：NORMAL（普通留言），RETURN_GOODS_APPROVED（卖家留退货地址时留言）；如果为RETURN_GOODS_APPROVED，则退款留言中有卖家收货地址
	 **/
	public $message_type;
	
	/** 
	 * 留言者编号
	 **/
	public $owner_id;
	
	/** 
	 * 留言者昵称
	 **/
	public $owner_nick;
	
	/** 
	 * 留言者身份1代表买家，2代表卖家，3代表小二
	 **/
	public $owner_role;
	
	/** 
	 * 凭证附件地址（图片）
	 **/
	public $pic_urls;
	
	/** 
	 * 退款编号。
	 **/
	public $refund_id;
	
	/** 
	 * 退款阶段，可选值：onsale（售中）, aftersale（售后）
	 **/
	public $refund_phase;	
}
?>