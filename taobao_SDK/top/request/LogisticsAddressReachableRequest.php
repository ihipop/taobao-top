<?php
/**
 * TOP API: taobao.logistics.address.reachable request
 * 
 * @author auto create
 * @since 1.0, 2016.09.12
 */
class LogisticsAddressReachableRequest
{
	/** 
	 * 详细地址
	 **/
	private $address;
	
	/** 
	 * 标准区域编码(三级行政区编码或是四级行政区)，可以通过taobao.areas.get获取，如北京市朝阳区为110105
	 **/
	private $areaCode;
	
	/** 
	 * 物流公司编码ID，可以从这个接口获取所有物流公司的标准编码taobao.logistics.companies.get，可以传入多个值，以英文逗号分隔，如“1000000952,1000000953”
	 **/
	private $partnerIds;
	
	/** 
	 * 服务对应的数字编码，如揽派范围对应88
	 **/
	private $serviceType;
	
	/** 
	 * 发货地，标准区域编码(四级行政)，可以通过taobao.areas.get获取，如浙江省杭州市余杭区闲林街道为 330110011
	 **/
	private $sourceAreaCode;
	
	private $apiParas = array();
	
	public function setAddress($address)
	{
		$this->address = $address;
		$this->apiParas["address"] = $address;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function setAreaCode($areaCode)
	{
		$this->areaCode = $areaCode;
		$this->apiParas["area_code"] = $areaCode;
	}

	public function getAreaCode()
	{
		return $this->areaCode;
	}

	public function setPartnerIds($partnerIds)
	{
		$this->partnerIds = $partnerIds;
		$this->apiParas["partner_ids"] = $partnerIds;
	}

	public function getPartnerIds()
	{
		return $this->partnerIds;
	}

	public function setServiceType($serviceType)
	{
		$this->serviceType = $serviceType;
		$this->apiParas["service_type"] = $serviceType;
	}

	public function getServiceType()
	{
		return $this->serviceType;
	}

	public function setSourceAreaCode($sourceAreaCode)
	{
		$this->sourceAreaCode = $sourceAreaCode;
		$this->apiParas["source_area_code"] = $sourceAreaCode;
	}

	public function getSourceAreaCode()
	{
		return $this->sourceAreaCode;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.address.reachable";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->partnerIds,"partnerIds");
		RequestCheckUtil::checkNotNull($this->serviceType,"serviceType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
