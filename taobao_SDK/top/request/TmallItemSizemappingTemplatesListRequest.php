<?php
/**
 * TOP API: tmall.item.sizemapping.templates.list request
 * 
 * @author auto create
 * @since 1.0, 2016.02.23
 */
class TmallItemSizemappingTemplatesListRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "tmall.item.sizemapping.templates.list";
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
