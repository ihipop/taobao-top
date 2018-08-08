<?php

/**
 * 物流宝商品
 * @author auto create
 */
class WlbItem
{
	
	/** 
	 * 品牌ID
	 **/
	public $brand_id;
	
	/** 
	 * 颜色
	 **/
	public $color;
	
	/** 
	 * 创建人
	 **/
	public $creator;
	
	/** 
	 * 标记，用逗号隔开的字符串。
BIT_HAS_AUTHORIZE 第1位 是否有授权规则;
BATCH  第2位 是否有批次规则；
SYNCHRONIZATION 第3位 是否有同步规则。
	 **/
	public $flag;
	
	/** 
	 * 创建日期
	 **/
	public $gmt_create;
	
	/** 
	 * 修改日期
	 **/
	public $gmt_modified;
	
	/** 
	 * 货类
	 **/
	public $goods_cat;
	
	/** 
	 * 高
	 **/
	public $height;
	
	/** 
	 * 商品id
	 **/
	public $id;
	
	/** 
	 * 是否危险品
	 **/
	public $is_dangerous;
	
	/** 
	 * 是否易碎
	 **/
	public $is_friable;
	
	/** 
	 * 是不是sku商品
值为true或false
	 **/
	public $is_sku;
	
	/** 
	 * 商家编码
	 **/
	public $item_code;
	
	/** 
	 * 最后修改人
	 **/
	public $last_modifier;
	
	/** 
	 * mm
	 **/
	public $length;
	
	/** 
	 * 商品的名称
	 **/
	public $name;
	
	/** 
	 * 包装材料
	 **/
	public $package_material;
	
	/** 
	 * 父item的id，当item为物流宝子商品时，parent_id必填,否则不必填
可通过父ID来得知商品的关系。
	 **/
	public $parent_id;
	
	/** 
	 * 价格
	 **/
	public $price;
	
	/** 
	 * 计价货类
	 **/
	public $pricing_cat;
	
	/** 
	 * 属性key:value; key:value
	 **/
	public $properties;
	
	/** 
	 * 发布版本号，用来同步商
	 **/
	public $publish_version;
	
	/** 
	 * 商品备注
	 **/
	public $remark;
	
	/** 
	 * 状态，item_status_valid -- 1 表示 有效 item_status_lock -- 2 表示锁住
	 **/
	public $status;
	
	/** 
	 * 前台商品名称
	 **/
	public $title;
	
	/** 
	 * 商品类型：
NORMAL--普通类型;
COMBINE--组合商品;
DISTRIBUTION--分销商品;
默认为NORMAL
	 **/
	public $type;
	
	/** 
	 * 商品所有人淘宝ID
	 **/
	public $user_id;
	
	/** 
	 * 商品所有人淘宝nick
	 **/
	public $user_nick;
	
	/** 
	 * 立方mm
	 **/
	public $volume;
	
	/** 
	 * 重量
	 **/
	public $weight;
	
	/** 
	 * 宽
	 **/
	public $width;	
}
?>