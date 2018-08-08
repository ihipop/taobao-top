<?php

/**
 * 子账号详细信息，其中包括账号基本信息、员工信息和部门职务信息
 * @author auto create
 */
class SubUserFullInfo
{
	
	/** 
	 * 部门Id
	 **/
	public $department_id;
	
	/** 
	 * 部门名称
	 **/
	public $department_name;
	
	/** 
	 * 职务Id
	 **/
	public $duty_id;
	
	/** 
	 * 职务等级
	 **/
	public $duty_level;
	
	/** 
	 * 职务名称
	 **/
	public $duty_name;
	
	/** 
	 * 员工ID
	 **/
	public $employee_id;
	
	/** 
	 * 员工姓名
	 **/
	public $employee_name;
	
	/** 
	 * 员工花名
	 **/
	public $employee_nickname;
	
	/** 
	 * 入职员工工号
	 **/
	public $employee_num;
	
	/** 
	 * 员工入职时间
	 **/
	public $entry_date;
	
	/** 
	 * 直接上级的员工ID
	 **/
	public $leader_id;
	
	/** 
	 * 办公电话
	 **/
	public $office_phone;
	
	/** 
	 * 父部门Id
	 **/
	public $parent_department;
	
	/** 
	 * 员工性别  1:男;  2:女
	 **/
	public $sex;
	
	/** 
	 * 子账号是否参与分流 true:参与分流 false:未参与分流
	 **/
	public $sub_dispatch_status;
	
	/** 
	 * 子账号Id
	 **/
	public $sub_id;
	
	/** 
	 * 子账号用户名
	 **/
	public $sub_nick;
	
	/** 
	 * 子账号是否已欠费 true:已欠费 false:未欠费
	 **/
	public $sub_owed_status;
	
	/** 
	 * 子账号当前状态：1正常，2卖家停用，3处罚冻结
	 **/
	public $sub_status;
	
	/** 
	 * 子账号企业邮箱
	 **/
	public $subuser_email;
	
	/** 
	 * 主账号企业邮箱
	 **/
	public $user_email;
	
	/** 
	 * 主账号Id
	 **/
	public $user_id;
	
	/** 
	 * 主账号用户名
	 **/
	public $user_nick;
	
	/** 
	 * 工作地点
	 **/
	public $work_location;	
}
?>