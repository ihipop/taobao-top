<?php
/**
 * TOP API: taobao.wlb.wms.unknown.package.upload request
 * 
 * @author auto create
 * @since 1.0, 2016.06.12
 */
class WlbWmsUnknownPackageUploadRequest
{
	/** 
	 * WlbWmsUnknownPackageUpload
	 **/
	private $content;
	
	private $apiParas = array();
	
	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.wms.unknown.package.upload";
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
