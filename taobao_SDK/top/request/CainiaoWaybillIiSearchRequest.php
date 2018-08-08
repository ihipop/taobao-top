<?php
/**
 * TOP API: cainiao.waybill.ii.search request
 * 
 * @author auto create
 * @since 1.0, 2017.06.29
 */
class CainiaoWaybillIiSearchRequest
{
	/** 
	 * 物流公司code
	 **/
	private $cpCode;
	
	private $apiParas = array();
	
	public function setCpCode($cpCode)
	{
		$this->cpCode = $cpCode;
		$this->apiParas["cp_code"] = $cpCode;
	}

	public function getCpCode()
	{
		return $this->cpCode;
	}

	public function getApiMethodName()
	{
		return "cainiao.waybill.ii.search";
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
