<?php
/**
 * TOP API: cainiao.crm.oms.rule.sync request
 * 
 * @author auto create
 * @since 1.0, 2017.05.27
 */
class CainiaoCrmOmsRuleSyncRequest
{
	/** 
	 * 人工审单规则描述
	 **/
	private $checkRuleMsg;
	
	/** 
	 * 是否系统智能处理订单（无人工介入）
	 **/
	private $isAutoCheck;
	
	/** 
	 * 是否开启菜鸟自动流转规则
	 **/
	private $isOpenCnauto;
	
	/** 
	 * 是否开启了订单合单
	 **/
	private $isSysMergeOrder;
	
	/** 
	 * 订单合单周期（单位：分钟）
	 **/
	private $mergeOrderCycle;
	
	/** 
	 * 其他未定义订单处理规则，格式｛name;stauts;cycle;｝
	 **/
	private $otherRule;
	
	/** 
	 * 店铺nick
	 **/
	private $shopCode;
	
	private $apiParas = array();
	
	public function setCheckRuleMsg($checkRuleMsg)
	{
		$this->checkRuleMsg = $checkRuleMsg;
		$this->apiParas["check_rule_msg"] = $checkRuleMsg;
	}

	public function getCheckRuleMsg()
	{
		return $this->checkRuleMsg;
	}

	public function setIsAutoCheck($isAutoCheck)
	{
		$this->isAutoCheck = $isAutoCheck;
		$this->apiParas["is_auto_check"] = $isAutoCheck;
	}

	public function getIsAutoCheck()
	{
		return $this->isAutoCheck;
	}

	public function setIsOpenCnauto($isOpenCnauto)
	{
		$this->isOpenCnauto = $isOpenCnauto;
		$this->apiParas["is_open_cnauto"] = $isOpenCnauto;
	}

	public function getIsOpenCnauto()
	{
		return $this->isOpenCnauto;
	}

	public function setIsSysMergeOrder($isSysMergeOrder)
	{
		$this->isSysMergeOrder = $isSysMergeOrder;
		$this->apiParas["is_sys_merge_order"] = $isSysMergeOrder;
	}

	public function getIsSysMergeOrder()
	{
		return $this->isSysMergeOrder;
	}

	public function setMergeOrderCycle($mergeOrderCycle)
	{
		$this->mergeOrderCycle = $mergeOrderCycle;
		$this->apiParas["merge_order_cycle"] = $mergeOrderCycle;
	}

	public function getMergeOrderCycle()
	{
		return $this->mergeOrderCycle;
	}

	public function setOtherRule($otherRule)
	{
		$this->otherRule = $otherRule;
		$this->apiParas["other_rule"] = $otherRule;
	}

	public function getOtherRule()
	{
		return $this->otherRule;
	}

	public function setShopCode($shopCode)
	{
		$this->shopCode = $shopCode;
		$this->apiParas["shop_code"] = $shopCode;
	}

	public function getShopCode()
	{
		return $this->shopCode;
	}

	public function getApiMethodName()
	{
		return "cainiao.crm.oms.rule.sync";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->isAutoCheck,"isAutoCheck");
		RequestCheckUtil::checkNotNull($this->isOpenCnauto,"isOpenCnauto");
		RequestCheckUtil::checkNotNull($this->shopCode,"shopCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
