<?php

/**
 * 图片空间的用户信息获取，包括订购容量等
 * @author auto create
 */
class UserInfo
{
	
	/** 
	 * 用户的可用容量，即订购量与免费量之和
	 **/
	public $available_space;
	
	/** 
	 * 图片空间的免费容量
	 **/
	public $free_space;
	
	/** 
	 * 图片空间的订购有效期
	 **/
	public $order_expiry_date;
	
	/** 
	 * 用户订购的图片空间容量
	 **/
	public $order_space;
	
	/** 
	 * 剩余的图片空间容量
	 **/
	public $remaining_space;
	
	/** 
	 * 已使用的图片空间容量
	 **/
	public $used_space;
	
	/** 
	 * 用户自定义的水印参数，通过"|"分割开，如果用户没有定义则为""
具体水印参数组合方法，用"|"分开，顺序按"是否全局设置|水印文字|是否文字水印优先|透明度|字体|字体大小|字体是否加粗|字体是否斜体|字体是否加下划线|字体颜色|旋转角度|是否带阴影|水印位置|图片水印URL|reference水印相对位置" reference取值有左上（1）/中间（3）/右下（2）,其中的null代表为空
	 **/
	public $water_mark;	
}
?>