<?php
/**
 * TOP API: cainiao.cboss.workplatform.biztype.querybyid request
 * 
 * @author auto create
 * @since 1.0, 2016.06.14
 */
class CainiaoCbossWorkplatformBiztypeQuerybyidRequest
{
	/** 
	 * 业务类型id
	 **/
	private $bizTypeId;
	
	private $apiParas = array();
	
	public function setBizTypeId($bizTypeId)
	{
		$this->bizTypeId = $bizTypeId;
		$this->apiParas["biz_type_id"] = $bizTypeId;
	}

	public function getBizTypeId()
	{
		return $this->bizTypeId;
	}

	public function getApiMethodName()
	{
		return "cainiao.cboss.workplatform.biztype.querybyid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
