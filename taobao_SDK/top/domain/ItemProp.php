<?php

/**
 * 商品属性
 * @author auto create
 */
class ItemProp
{
	
	/** 
	 * 子属性的模板（卖家自行输入属性时需要用到）
	 **/
	public $child_template;
	
	/** 
	 * 类目ID
	 **/
	public $cid;
	
	/** 
	 * 属性的feature列表
	 **/
	public $features;
	
	/** 
	 * 是否允许别名。可选值：true（是），false（否）
	 **/
	public $is_allow_alias;
	
	/** 
	 * 是否颜色属性。可选值:true(是),false(否)
	 **/
	public $is_color_prop;
	
	/** 
	 * 是否是可枚举属性。可选值:true(是),false(否)
	 **/
	public $is_enum_prop;
	
	/** 
	 * 在is_enum_prop是true的前提下，是否是卖家可以自行输入的属性（注：如果is_enum_prop返回false，该参数统一返回false）。可选值:true(是),false(否)。<b>对于品牌和型号属性（包括子属性）：如果用户是C卖家，则可自定义属性；如果是B卖家，则不可自定义属性，而必须要授权的属性。</b>
	 **/
	public $is_input_prop;
	
	/** 
	 * 是否商品属性。可选值:true(是),false(否)
	 **/
	public $is_item_prop;
	
	/** 
	 * 是否关键属性。可选值:true(是),false(否)
	 **/
	public $is_key_prop;
	
	/** 
	 * 是否是材质 属性项
	 **/
	public $is_material;
	
	/** 
	 * 是否销售属性。可选值:true(是),false(否)
	 **/
	public $is_sale_prop;
	
	/** 
	 * 是否度量衡属性项
	 **/
	public $is_taosir;
	
	/** 
	 * 材质属性信息
	 **/
	public $material_do;
	
	/** 
	 * 属性修改时间（增量类目专用）
	 **/
	public $modified_time;
	
	/** 
	 * 三种枚举类型：modify，add，delete（增量类目专用）
	 **/
	public $modified_type;
	
	/** 
	 * 发布产品或商品时是否可以多选。可选值:true(是),false(否)
	 **/
	public $multi;
	
	/** 
	 * 发布产品或商品时是否为必选属性。可选值:true(是),false(否)
	 **/
	public $must;
	
	/** 
	 * 属性名
	 **/
	public $name;
	
	/** 
	 * 上级属性ID
	 **/
	public $parent_pid;
	
	/** 
	 * 上级属性值ID
	 **/
	public $parent_vid;
	
	/** 
	 * 属性 ID 例：品牌的PID=20000
	 **/
	public $pid;
	
	/** 
	 * null
	 **/
	public $prop_values;
	
	/** 
	 * 发布产品或商品时是否为必选属性(与must相同)。可选值:true(是),false(否)
	 **/
	public $required;
	
	/** 
	 * 排列序号。取值范围:大于零的整排列序号。取值范围:大于零的整数
	 **/
	public $sort_order;
	
	/** 
	 * 状态。可选值:normal(正常),deleted(删除)
	 **/
	public $status;
	
	/** 
	 * 度量衡相关信息
	 **/
	public $taosir_do;
	
	/** 
	 * 属性值类型。可选值：
multiCheck(枚举多选)
optional(枚举单选)
multiCheckText(枚举可输入多选)
optionalText(枚举可输入单选)
text(非枚举可输入)
	 **/
	public $type;	
}
?>