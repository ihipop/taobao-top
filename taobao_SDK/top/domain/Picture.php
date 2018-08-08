<?php

/**
 * 图片
 * @author auto create
 */
class Picture
{
	
	/** 
	 * 图片上传的来源，有电脑版本宝贝发布，手机版本宝贝发布
	 **/
	public $client_type;
	
	/** 
	 * 图片的创建时间
	 **/
	public $created;
	
	/** 
	 * 图片是否删除的标记
	 **/
	public $deleted;
	
	/** 
	 * 上传时间
	 **/
	public $gmt_create;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 图片在后台处理之后的md5值当md5值为32位长度的字符串时为图片搬家后的文件md5验证码md5值为长整数时为图片替换后的时间戳
	 **/
	public $md5;
	
	/** 
	 * 图片的修改时间
	 **/
	public $modified;
	
	/** 
	 * 图片名称
	 **/
	public $name;
	
	/** 
	 * 图片分类ID
	 **/
	public $picture_category_id;
	
	/** 
	 * 图片ID
	 **/
	public $picture_id;
	
	/** 
	 * 返回的是绝对路径如：http://img07.taobaocdn.com/imgextra/i7/22670458/T2dD0kXb4cXXXXXXXX_!!22670458.jpg
	 **/
	public $picture_path;
	
	/** 
	 * 图片相素,格式:长x宽，如450x150
	 **/
	public $pixel;
	
	/** 
	 * 图片是否被引用
	 **/
	public $referenced;
	
	/** 
	 * 图片大小,bite单位
	 **/
	public $sizes;
	
	/** 
	 * 图片状态,unfroze代表没有被冻结，froze代表被冻结,pass代表排查通过
	 **/
	public $status;
	
	/** 
	 * 是否删除
	 **/
	public $success;
	
	/** 
	 * 图片标题
	 **/
	public $title;
	
	/** 
	 * 卖家ID
	 **/
	public $uid;	
}
?>