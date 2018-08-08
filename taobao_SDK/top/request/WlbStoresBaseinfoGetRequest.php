<?php
/**
 * TOP API: taobao.wlb.stores.baseinfo.get request
 * 
 * @author auto create
 * @since 1.0, 2016.04.13
 */
class WlbStoresBaseinfoGetRequest
{
	/** 
	 * 0.商家仓库.1.菜鸟仓库.2全部被划分的仓库
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.stores.baseinfo.get";
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
