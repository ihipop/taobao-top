<?php
/**
 * TOP API: cainiao.waybill.ii.product request
 * 
 * @author auto create
 * @since 1.0, 2017.04.13
 */
class CainiaoWaybillIiProductRequest
{
	/** 
	 * 快递公司code
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
		return "cainiao.waybill.ii.product";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cpCode,"cpCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
