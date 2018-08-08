<?php

/**
 * 推荐的关联商品
 * @author auto create
 */
class FavoriteItem
{
	
	/** 
	 * 商品ID
	 **/
	public $item_id;
	
	/** 
	 * 商品名称
	 **/
	public $item_name;
	
	/** 
	 * 商品图片地址
	 **/
	public $item_pictrue;
	
	/** 
	 * 商品价格
	 **/
	public $item_price;
	
	/** 
	 * 商品的详情页面地址
	 **/
	public $item_url;
	
	/** 
	 * 促销价格
	 **/
	public $promotion_price;
	
	/** 
	 * 商品销售次数
	 **/
	public $sell_count;
	
	/** 
	 * 商品id（具有跟踪效果）代替原来的item_id  <a href="http://dev.open.taobao.com/bbs/read.php?tid=24323">详细说明</a>
	 **/
	public $track_iid;	
}
?>