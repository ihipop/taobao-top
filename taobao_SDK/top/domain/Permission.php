<?php

/**
 * 权限信息
 * @author auto create
 */
class Permission
{
	
	/** 
	 * 1 :允许授权  2：不允许授权 6：不允许授权但默认已有权限
	 **/
	public $is_authorize;
	
	/** 
	 * 父权限code
	 **/
	public $parent_code;
	
	/** 
	 * 注册到权限中心的code值
	 **/
	public $permission_code;
	
	/** 
	 * 权限名称
	 **/
	public $permission_name;	
}
?>