<?php

/**
 * 部门信息
 * @author auto create
 */
class Department
{
	
	/** 
	 * 部门ID
	 **/
	public $department_id;
	
	/** 
	 * 部门名称
	 **/
	public $department_name;
	
	/** 
	 * 当前部门的父部门ID
	 **/
	public $parent_id;
	
	/** 
	 * 部门下关联的子账号id列表
	 **/
	public $sub_user_ids;	
}
?>