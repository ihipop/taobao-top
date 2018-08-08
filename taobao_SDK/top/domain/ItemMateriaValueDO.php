<?php

/**
 * 类目材质DO数据结构
 * @author auto create
 */
class ItemMateriaValueDO
{
	
	/** 
	 * 材质值名称
	 **/
	public $name;
	
	/** 
	 * 当前材质值，是否需要填写含量值。比如：棉 是需要填写含量值，而牛皮 是不需要填写含量值的
	 **/
	public $need_content_number;	
}
?>