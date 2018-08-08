<?php
/**
 * TOP API: taobao.rp.returngoods.agree request
 * 
 * @author auto create
 * @since 1.0, 2014.11.10
 */
class RpReturngoodsAgreeRequest
{
	/** 
	 * 卖家提供的退货地址，淘宝退款为必填项。
	 **/
	private $address;
	
	/** 
	 * 卖家手机，淘宝退款为必填项。
	 **/
	private $mobile;
	
	/** 
	 * 卖家姓名，淘宝退款为必填项。
	 **/
	private $name;
	
	/** 
	 * 卖家提供的退货地址的邮编，淘宝退款为必填项。
	 **/
	private $post;
	
	/** 
	 * 退款编号
	 **/
	private $refundId;
	
	/** 
	 * 售中：onsale，售后：aftersale，天猫退款为必填项。
	 **/
	private $refundPhase;
	
	/** 
	 * 退款版本号，天猫退款为必填项。
	 **/
	private $refundVersion;
	
	/** 
	 * 卖家退货留言，天猫退款为必填项。
	 **/
	private $remark;
	
	/** 
	 * 卖家收货地址编号，天猫淘宝退款都为必填项。
	 **/
	private $sellerAddressId;
	
	/** 
	 * 卖家座机，淘宝退款为必填项。
	 **/
	private $tel;
	
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

	public function setMobile($mobile)
	{
		$this->mobile = $mobile;
		$this->apiParas["mobile"] = $mobile;
	}

	public function getMobile()
	{
		return $this->mobile;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setPost($post)
	{
		$this->post = $post;
		$this->apiParas["post"] = $post;
	}

	public function getPost()
	{
		return $this->post;
	}

	public function setRefundId($refundId)
	{
		$this->refundId = $refundId;
		$this->apiParas["refund_id"] = $refundId;
	}

	public function getRefundId()
	{
		return $this->refundId;
	}

	public function setRefundPhase($refundPhase)
	{
		$this->refundPhase = $refundPhase;
		$this->apiParas["refund_phase"] = $refundPhase;
	}

	public function getRefundPhase()
	{
		return $this->refundPhase;
	}

	public function setRefundVersion($refundVersion)
	{
		$this->refundVersion = $refundVersion;
		$this->apiParas["refund_version"] = $refundVersion;
	}

	public function getRefundVersion()
	{
		return $this->refundVersion;
	}

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
	}

	public function setSellerAddressId($sellerAddressId)
	{
		$this->sellerAddressId = $sellerAddressId;
		$this->apiParas["seller_address_id"] = $sellerAddressId;
	}

	public function getSellerAddressId()
	{
		return $this->sellerAddressId;
	}

	public function setTel($tel)
	{
		$this->tel = $tel;
		$this->apiParas["tel"] = $tel;
	}

	public function getTel()
	{
		return $this->tel;
	}

	public function getApiMethodName()
	{
		return "taobao.rp.returngoods.agree";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->refundId,"refundId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
