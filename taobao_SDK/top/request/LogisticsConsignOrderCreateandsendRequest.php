<?php
/**
 * TOP API: taobao.logistics.consign.order.createandsend request
 * 
 * @author auto create
 * @since 1.0, 2016.04.13
 */
class LogisticsConsignOrderCreateandsendRequest
{
	/** 
	 * 物流公司ID
	 **/
	private $companyId;
	
	/** 
	 * 物品的json数据。
	 **/
	private $itemJsonString;
	
	/** 
	 * 物流订单物流类型，值固定选择：2
	 **/
	private $logisType;
	
	/** 
	 * 运单号
	 **/
	private $mailNo;
	
	/** 
	 * 订单来源，值选择：30
	 **/
	private $orderSource;
	
	/** 
	 * 订单类型，值固定选择：30
	 **/
	private $orderType;
	
	/** 
	 * 收件人街道地址
	 **/
	private $rAddress;
	
	/** 
	 * 收件人区域ID
	 **/
	private $rAreaId;
	
	/** 
	 * 市
	 **/
	private $rCityName;
	
	/** 
	 * 区
	 **/
	private $rDistName;
	
	/** 
	 * 手机号码
	 **/
	private $rMobilePhone;
	
	/** 
	 * 收件人名称
	 **/
	private $rName;
	
	/** 
	 * 省
	 **/
	private $rProvName;
	
	/** 
	 * 电话号码
	 **/
	private $rTelephone;
	
	/** 
	 * 收件人邮编
	 **/
	private $rZipCode;
	
	/** 
	 * 发件人街道地址
	 **/
	private $sAddress;
	
	/** 
	 * 发件人区域ID
	 **/
	private $sAreaId;
	
	/** 
	 * 市
	 **/
	private $sCityName;
	
	/** 
	 * 区
	 **/
	private $sDistName;
	
	/** 
	 * 手机号码
	 **/
	private $sMobilePhone;
	
	/** 
	 * 发件人名称
	 **/
	private $sName;
	
	/** 
	 * 省
	 **/
	private $sProvName;
	
	/** 
	 * 电话号码
	 **/
	private $sTelephone;
	
	/** 
	 * 发件人出编
	 **/
	private $sZipCode;
	
	/** 
	 * 费用承担方式 1买家承担运费 2卖家承担运费
	 **/
	private $shipping;
	
	/** 
	 * 交易流水号，淘外订单号或者商家内部交易流水号
	 **/
	private $tradeId;
	
	/** 
	 * 用户ID
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setCompanyId($companyId)
	{
		$this->companyId = $companyId;
		$this->apiParas["company_id"] = $companyId;
	}

	public function getCompanyId()
	{
		return $this->companyId;
	}

	public function setItemJsonString($itemJsonString)
	{
		$this->itemJsonString = $itemJsonString;
		$this->apiParas["item_json_string"] = $itemJsonString;
	}

	public function getItemJsonString()
	{
		return $this->itemJsonString;
	}

	public function setLogisType($logisType)
	{
		$this->logisType = $logisType;
		$this->apiParas["logis_type"] = $logisType;
	}

	public function getLogisType()
	{
		return $this->logisType;
	}

	public function setMailNo($mailNo)
	{
		$this->mailNo = $mailNo;
		$this->apiParas["mail_no"] = $mailNo;
	}

	public function getMailNo()
	{
		return $this->mailNo;
	}

	public function setOrderSource($orderSource)
	{
		$this->orderSource = $orderSource;
		$this->apiParas["order_source"] = $orderSource;
	}

	public function getOrderSource()
	{
		return $this->orderSource;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
	}

	public function setrAddress($rAddress)
	{
		$this->rAddress = $rAddress;
		$this->apiParas["r_address"] = $rAddress;
	}

	public function getrAddress()
	{
		return $this->rAddress;
	}

	public function setrAreaId($rAreaId)
	{
		$this->rAreaId = $rAreaId;
		$this->apiParas["r_area_id"] = $rAreaId;
	}

	public function getrAreaId()
	{
		return $this->rAreaId;
	}

	public function setrCityName($rCityName)
	{
		$this->rCityName = $rCityName;
		$this->apiParas["r_city_name"] = $rCityName;
	}

	public function getrCityName()
	{
		return $this->rCityName;
	}

	public function setrDistName($rDistName)
	{
		$this->rDistName = $rDistName;
		$this->apiParas["r_dist_name"] = $rDistName;
	}

	public function getrDistName()
	{
		return $this->rDistName;
	}

	public function setrMobilePhone($rMobilePhone)
	{
		$this->rMobilePhone = $rMobilePhone;
		$this->apiParas["r_mobile_phone"] = $rMobilePhone;
	}

	public function getrMobilePhone()
	{
		return $this->rMobilePhone;
	}

	public function setrName($rName)
	{
		$this->rName = $rName;
		$this->apiParas["r_name"] = $rName;
	}

	public function getrName()
	{
		return $this->rName;
	}

	public function setrProvName($rProvName)
	{
		$this->rProvName = $rProvName;
		$this->apiParas["r_prov_name"] = $rProvName;
	}

	public function getrProvName()
	{
		return $this->rProvName;
	}

	public function setrTelephone($rTelephone)
	{
		$this->rTelephone = $rTelephone;
		$this->apiParas["r_telephone"] = $rTelephone;
	}

	public function getrTelephone()
	{
		return $this->rTelephone;
	}

	public function setrZipCode($rZipCode)
	{
		$this->rZipCode = $rZipCode;
		$this->apiParas["r_zip_code"] = $rZipCode;
	}

	public function getrZipCode()
	{
		return $this->rZipCode;
	}

	public function setsAddress($sAddress)
	{
		$this->sAddress = $sAddress;
		$this->apiParas["s_address"] = $sAddress;
	}

	public function getsAddress()
	{
		return $this->sAddress;
	}

	public function setsAreaId($sAreaId)
	{
		$this->sAreaId = $sAreaId;
		$this->apiParas["s_area_id"] = $sAreaId;
	}

	public function getsAreaId()
	{
		return $this->sAreaId;
	}

	public function setsCityName($sCityName)
	{
		$this->sCityName = $sCityName;
		$this->apiParas["s_city_name"] = $sCityName;
	}

	public function getsCityName()
	{
		return $this->sCityName;
	}

	public function setsDistName($sDistName)
	{
		$this->sDistName = $sDistName;
		$this->apiParas["s_dist_name"] = $sDistName;
	}

	public function getsDistName()
	{
		return $this->sDistName;
	}

	public function setsMobilePhone($sMobilePhone)
	{
		$this->sMobilePhone = $sMobilePhone;
		$this->apiParas["s_mobile_phone"] = $sMobilePhone;
	}

	public function getsMobilePhone()
	{
		return $this->sMobilePhone;
	}

	public function setsName($sName)
	{
		$this->sName = $sName;
		$this->apiParas["s_name"] = $sName;
	}

	public function getsName()
	{
		return $this->sName;
	}

	public function setsProvName($sProvName)
	{
		$this->sProvName = $sProvName;
		$this->apiParas["s_prov_name"] = $sProvName;
	}

	public function getsProvName()
	{
		return $this->sProvName;
	}

	public function setsTelephone($sTelephone)
	{
		$this->sTelephone = $sTelephone;
		$this->apiParas["s_telephone"] = $sTelephone;
	}

	public function getsTelephone()
	{
		return $this->sTelephone;
	}

	public function setsZipCode($sZipCode)
	{
		$this->sZipCode = $sZipCode;
		$this->apiParas["s_zip_code"] = $sZipCode;
	}

	public function getsZipCode()
	{
		return $this->sZipCode;
	}

	public function setShipping($shipping)
	{
		$this->shipping = $shipping;
		$this->apiParas["shipping"] = $shipping;
	}

	public function getShipping()
	{
		return $this->shipping;
	}

	public function setTradeId($tradeId)
	{
		$this->tradeId = $tradeId;
		$this->apiParas["trade_id"] = $tradeId;
	}

	public function getTradeId()
	{
		return $this->tradeId;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.consign.order.createandsend";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->companyId,"companyId");
		RequestCheckUtil::checkNotNull($this->itemJsonString,"itemJsonString");
		RequestCheckUtil::checkNotNull($this->logisType,"logisType");
		RequestCheckUtil::checkNotNull($this->orderSource,"orderSource");
		RequestCheckUtil::checkNotNull($this->orderType,"orderType");
		RequestCheckUtil::checkNotNull($this->rAddress,"rAddress");
		RequestCheckUtil::checkNotNull($this->rAreaId,"rAreaId");
		RequestCheckUtil::checkNotNull($this->rCityName,"rCityName");
		RequestCheckUtil::checkNotNull($this->rName,"rName");
		RequestCheckUtil::checkNotNull($this->rProvName,"rProvName");
		RequestCheckUtil::checkNotNull($this->rZipCode,"rZipCode");
		RequestCheckUtil::checkNotNull($this->sAddress,"sAddress");
		RequestCheckUtil::checkNotNull($this->sAreaId,"sAreaId");
		RequestCheckUtil::checkNotNull($this->sCityName,"sCityName");
		RequestCheckUtil::checkNotNull($this->sName,"sName");
		RequestCheckUtil::checkNotNull($this->sProvName,"sProvName");
		RequestCheckUtil::checkNotNull($this->sZipCode,"sZipCode");
		RequestCheckUtil::checkNotNull($this->tradeId,"tradeId");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
