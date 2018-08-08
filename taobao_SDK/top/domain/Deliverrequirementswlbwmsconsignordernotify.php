<?php

/**
 * 配送要求
 * @author auto create
 */
class Deliverrequirementswlbwmsconsignordernotify
{
	
	/** 
	 * 配送类型： PTPS-常温配送 LLPS-冷链配送
	 **/
	public $delivery_type;
	
	/** 
	 * 送达日期
	 **/
	public $schedule_day;
	
	/** 
	 * 送达结束时间
	 **/
	public $schedule_end;
	
	/** 
	 * 送达开始时间
	 **/
	public $schedule_start;
	
	/** 
	 * 投递时延要求:  1-工作日 2-节假日 101,当日达102次晨达103次日达 111 活动标  104 预约达
	 **/
	public $schedule_type;	
}
?>