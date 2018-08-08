<?php
/**
 * TOP API: taobao.ticket.item.add request
 * 
 * @author auto create
 * @since 1.0, 2016.04.14
 */
class TicketItemAddRequest
{
	/** 
	 * 门票商品返点比例（只对B卖家开放，单位为%）
	 **/
	private $auctionPoint;
	
	/** 
	 * 门票商品状态（onsale：上架，instock：仓库）
	 **/
	private $auctionStatus;
	
	/** 
	 * 核销机具提供商
	 **/
	private $checkToolMerchant;
	
	/** 
	 * 门票商品所在地-城市
	 **/
	private $city;
	
	/** 
	 * 门票宝贝描述
	 **/
	private $description;
	
	/** 
	 * 门票商品电子凭证是否关联本地商户-在门票商品为电子凭证时必选
	 **/
	private $etcAssociationStatus;
	
	/** 
	 * 门票商品电子凭证的自动退款比例-在门票商品为电子凭证时必选
	 **/
	private $etcAutoRefund;
	
	/** 
	 * 门票商品电子凭证的码商-在门票商品为电子凭证时必选
	 **/
	private $etcMerchantId;
	
	/** 
	 * 门票商品电子凭证的码商名-在门票商品为电子凭证时必选
	 **/
	private $etcMerchantNick;
	
	/** 
	 * 门票商品电子凭证网店ID-在门票商品为电子凭证时必选
	 **/
	private $etcNetworkId;
	
	/** 
	 * 门票商品电子凭证的过期退款比例-在门票商品为电子凭证时必选
	 **/
	private $etcOverduePay;
	
	/** 
	 * 门票商品电子凭证是否核销打款-在门票商品为电子凭证时必选
	 **/
	private $etcVerificationPay;
	
	/** 
	 * 门票商品是否有发票（有发票：true，没有发票：false）.
对于B卖家来说只能选择有发票。
	 **/
	private $haveInvoice;
	
	/** 
	 * 商品主图-该值来自图片空间接口返回的图片链接（不包含域名和前缀）
	 **/
	private $image1;
	
	/** 
	 * 第一张多图-该值来自图片空间接口返回的图片链接（不包含域名和前缀）
	 **/
	private $image2;
	
	/** 
	 * 第二张多图-该值来自图片空间接口返回的图片链接（不包含域名和前缀）
	 **/
	private $image3;
	
	/** 
	 * 第三张多图-该值来自图片空间接口返回的图片链接（不包含域名和前缀）
	 **/
	private $image4;
	
	/** 
	 * 第四张多图-该值来自图片空间接口返回的图片链接（不包含域名和前缀）
	 **/
	private $image5;
	
	/** 
	 * 门票商品的上架时间（精确到分，格式为：yyyy-MM-dd HH:mm）
	 **/
	private $listTime;
	
	/** 
	 * 门票商品的物流运费模板-在产品规格使用到物流时必选
	 **/
	private $postageId;
	
	/** 
	 * 门票对应产品标识<br>
门票商品只能使用达尔文体系下的产品。该参数可通过taobao.products.search接口获取，注意返回产品的cspu_feature属性，该属性表明是否为达尔文体系下产品。
	 **/
	private $productId;
	
	/** 
	 * 门票商品是否橱窗推荐（橱窗推荐；true，不推荐则可不用设置该值）
	 **/
	private $promotedStatus;
	
	/** 
	 * 门票商品所在地-省份
	 **/
	private $prov;
	
	/** 
	 * 卖家客服电话。注意有格式校验。可以是手机号或座机号。手机号规则以1开头的11位数字；座机格式：包含两部分，区号（3-4位数字）和电话（7-8位数字），且区号和电话之间使用"-"相连
	 **/
	private $sellerCsPhone;
	
	/** 
	 * 门票宝贝所属的店铺分类列表-店铺分类标识请使用店铺相关接口获取获取，多个店铺分类标识之间通过逗号进行分隔，最多包含10个分类标识
	 **/
	private $shopCats;
	
	/** 
	 * 门票商品产品规格信息，包括门票的库存价格等信息（产品规格可通过tmall.product.specs.get接口获取）。<br>请通过门票商品使用的产品所对应的产品规格信息进行设置，注意由于产品规格信息比较复杂，所以直接使用json作为传输，请按照约定传入正确的json格式）<br>
格式定义：<br>
<pre>
{
    "SKU": {
        "20890017-121840019_20394-121290067": { // 产品下的某个产品规格的属性属性值信息（pid-vid_pid-vid）
            "effDates": {
                "1": {
                    "type": "0",
                    // 有效期类型，0-非指定日票，1-指定日票，2-年卡
                    "effDate": { // 有效期，如下几块，type已经去掉
                        "startDate": "2013-01-01",
                        // 有效期时间段开始时间,null代表未设置
                        "endDate": "2013-12-31",
                        // 有效期时间段结束时间,null代表未设置
                        "weeks": ["1", "4"],
                        // 有效期周,1~7代表周一到周日，null代表未设置
                        "startHour": "12",
                        // 有效期开始时间小时,null代表未设置
                        "startMinute": "59",
                        // 有效期开始时间分钟,null代表未设置
                        "endHour": "18" // 有效期结束时间小时,null代表未设置
                        "endMinute": "30" // 有效期结束时间分钟,null代表未设置
                        "effDays": "1",
                        // xx后n天内有效的天数，购买后、出票后、开卡后n天内有效,null代表未设置
                    },
                    "timeLimit": { // 入园时间限制数据
                        "limit": {
                            "type": "0",
                            // 入园时间限制类型,0-不限，1-提前n天的n点n分，2-提前n小时n分钟
                            "aheadDays": "3",
                            // 入园时间限制类型为提前n天的n点n分时才使用，入园时间提前n天的天数
                            "aheadAtHour": "12",
                            // 入园时间限制类型为提前n天的n点n分时才使用，入园时间在n点n分之前的小时
                            "aheadAtMinute": "30",
                            // 入园时间限制类型为提前n天的n点n分时才使用，入园时间在n点n分之前的分钟
                            "aheadHours": "48",
                            // 入园时间限制类型为提前n小时n分时才使用，入园时间提前n小时的小时
                            "aheadMinutes": "30",
                            // 入园时间限制类型为提前n小时n分时才使用，入园时间提前n分钟的分钟
                        }
                        "autoActivate": { // 有效期类型为年卡时才使用
                            "type": "0",
                            // 是否有最晚自动开卡时间,0-无，1-有最晚自动开卡
                            "time": "30" // 天数,无最晚自动开发时间时为null
                        }
                    }

                    "price": 10000,
                    "inventory": 100,
                    "outerId": "商家编码"
                },
                "222": {}
            },
            "save": true,
            // 必须，代表是保存的有效数据
            "returnRule": {
                "type": "0",
                // 0,1,2
                "value": "" // type 0:""，1:""，2:"卖家输入的文本"
            },
            "changeRule": {
                "type": "1",
                // 0,1,2
                "value": "" // type 0:""，1:""，2:"卖家输入的文本"
            },
            "oldGuide": "读取商品以前的预定须知文本",
            //商品以前的预定须知，可选，
            "feeDesc": "卖家输入的文本",
            //预定须知-费用包含说明，必选，
            "orderTimeDesc": "卖家输入的文本",
            //预定须知-预定时间说明，必选，
            "checkinValue": "1",
            //入园方式-选项，必选，1,"报验证码换票入园";2, "扫二维码入园";3, "扫身份证入园";4, "报手机号换票入园";5, "使用实体票入园";6, "其他"
            "checkinDesc": "卖家输入的文本",
            //入园方式-补填信息。当checkinValue为6时必选，其他情况可选
            "sellerNoteTip": "卖家输入的文本",
            //预留信息，买家在下单时，卖家留言处的提醒，必选，
            "otherGuide": "卖家输入的文本" //预定须知其他补充说明，可选
        }
    }
}
</pre><br>
	 **/
	private $skus;
	
	/** 
	 * 门票商品库存技术方式（拍下减库存：true，付款减库存：false）
	 **/
	private $subStockAtBuy;
	
	/** 
	 * 门票商品标题
	 **/
	private $title;
	
	/** 
	 * 门票商品视频-视频标识由多媒体中相关接口获取
	 **/
	private $videoId;
	
	/** 
	 * 门票商品是否参与店铺会员打折
	 **/
	private $vipPromoted;
	
	private $apiParas = array();
	
	public function setAuctionPoint($auctionPoint)
	{
		$this->auctionPoint = $auctionPoint;
		$this->apiParas["auction_point"] = $auctionPoint;
	}

	public function getAuctionPoint()
	{
		return $this->auctionPoint;
	}

	public function setAuctionStatus($auctionStatus)
	{
		$this->auctionStatus = $auctionStatus;
		$this->apiParas["auction_status"] = $auctionStatus;
	}

	public function getAuctionStatus()
	{
		return $this->auctionStatus;
	}

	public function setCheckToolMerchant($checkToolMerchant)
	{
		$this->checkToolMerchant = $checkToolMerchant;
		$this->apiParas["check_tool_merchant"] = $checkToolMerchant;
	}

	public function getCheckToolMerchant()
	{
		return $this->checkToolMerchant;
	}

	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setEtcAssociationStatus($etcAssociationStatus)
	{
		$this->etcAssociationStatus = $etcAssociationStatus;
		$this->apiParas["etc.association_status"] = $etcAssociationStatus;
	}

	public function getEtcAssociationStatus()
	{
		return $this->etcAssociationStatus;
	}

	public function setEtcAutoRefund($etcAutoRefund)
	{
		$this->etcAutoRefund = $etcAutoRefund;
		$this->apiParas["etc.auto_refund"] = $etcAutoRefund;
	}

	public function getEtcAutoRefund()
	{
		return $this->etcAutoRefund;
	}

	public function setEtcMerchantId($etcMerchantId)
	{
		$this->etcMerchantId = $etcMerchantId;
		$this->apiParas["etc.merchant_id"] = $etcMerchantId;
	}

	public function getEtcMerchantId()
	{
		return $this->etcMerchantId;
	}

	public function setEtcMerchantNick($etcMerchantNick)
	{
		$this->etcMerchantNick = $etcMerchantNick;
		$this->apiParas["etc.merchant_nick"] = $etcMerchantNick;
	}

	public function getEtcMerchantNick()
	{
		return $this->etcMerchantNick;
	}

	public function setEtcNetworkId($etcNetworkId)
	{
		$this->etcNetworkId = $etcNetworkId;
		$this->apiParas["etc.network_id"] = $etcNetworkId;
	}

	public function getEtcNetworkId()
	{
		return $this->etcNetworkId;
	}

	public function setEtcOverduePay($etcOverduePay)
	{
		$this->etcOverduePay = $etcOverduePay;
		$this->apiParas["etc.overdue_pay"] = $etcOverduePay;
	}

	public function getEtcOverduePay()
	{
		return $this->etcOverduePay;
	}

	public function setEtcVerificationPay($etcVerificationPay)
	{
		$this->etcVerificationPay = $etcVerificationPay;
		$this->apiParas["etc.verification_pay"] = $etcVerificationPay;
	}

	public function getEtcVerificationPay()
	{
		return $this->etcVerificationPay;
	}

	public function setHaveInvoice($haveInvoice)
	{
		$this->haveInvoice = $haveInvoice;
		$this->apiParas["have_invoice"] = $haveInvoice;
	}

	public function getHaveInvoice()
	{
		return $this->haveInvoice;
	}

	public function setImage1($image1)
	{
		$this->image1 = $image1;
		$this->apiParas["image_1"] = $image1;
	}

	public function getImage1()
	{
		return $this->image1;
	}

	public function setImage2($image2)
	{
		$this->image2 = $image2;
		$this->apiParas["image_2"] = $image2;
	}

	public function getImage2()
	{
		return $this->image2;
	}

	public function setImage3($image3)
	{
		$this->image3 = $image3;
		$this->apiParas["image_3"] = $image3;
	}

	public function getImage3()
	{
		return $this->image3;
	}

	public function setImage4($image4)
	{
		$this->image4 = $image4;
		$this->apiParas["image_4"] = $image4;
	}

	public function getImage4()
	{
		return $this->image4;
	}

	public function setImage5($image5)
	{
		$this->image5 = $image5;
		$this->apiParas["image_5"] = $image5;
	}

	public function getImage5()
	{
		return $this->image5;
	}

	public function setListTime($listTime)
	{
		$this->listTime = $listTime;
		$this->apiParas["list_time"] = $listTime;
	}

	public function getListTime()
	{
		return $this->listTime;
	}

	public function setPostageId($postageId)
	{
		$this->postageId = $postageId;
		$this->apiParas["postage_id"] = $postageId;
	}

	public function getPostageId()
	{
		return $this->postageId;
	}

	public function setProductId($productId)
	{
		$this->productId = $productId;
		$this->apiParas["product_id"] = $productId;
	}

	public function getProductId()
	{
		return $this->productId;
	}

	public function setPromotedStatus($promotedStatus)
	{
		$this->promotedStatus = $promotedStatus;
		$this->apiParas["promoted_status"] = $promotedStatus;
	}

	public function getPromotedStatus()
	{
		return $this->promotedStatus;
	}

	public function setProv($prov)
	{
		$this->prov = $prov;
		$this->apiParas["prov"] = $prov;
	}

	public function getProv()
	{
		return $this->prov;
	}

	public function setSellerCsPhone($sellerCsPhone)
	{
		$this->sellerCsPhone = $sellerCsPhone;
		$this->apiParas["seller_cs_phone"] = $sellerCsPhone;
	}

	public function getSellerCsPhone()
	{
		return $this->sellerCsPhone;
	}

	public function setShopCats($shopCats)
	{
		$this->shopCats = $shopCats;
		$this->apiParas["shop_cats"] = $shopCats;
	}

	public function getShopCats()
	{
		return $this->shopCats;
	}

	public function setSkus($skus)
	{
		$this->skus = $skus;
		$this->apiParas["skus"] = $skus;
	}

	public function getSkus()
	{
		return $this->skus;
	}

	public function setSubStockAtBuy($subStockAtBuy)
	{
		$this->subStockAtBuy = $subStockAtBuy;
		$this->apiParas["sub_stock_at_buy"] = $subStockAtBuy;
	}

	public function getSubStockAtBuy()
	{
		return $this->subStockAtBuy;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setVideoId($videoId)
	{
		$this->videoId = $videoId;
		$this->apiParas["video_id"] = $videoId;
	}

	public function getVideoId()
	{
		return $this->videoId;
	}

	public function setVipPromoted($vipPromoted)
	{
		$this->vipPromoted = $vipPromoted;
		$this->apiParas["vip_promoted"] = $vipPromoted;
	}

	public function getVipPromoted()
	{
		return $this->vipPromoted;
	}

	public function getApiMethodName()
	{
		return "taobao.ticket.item.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->auctionStatus,"auctionStatus");
		RequestCheckUtil::checkMaxLength($this->auctionStatus,10,"auctionStatus");
		RequestCheckUtil::checkNotNull($this->checkToolMerchant,"checkToolMerchant");
		RequestCheckUtil::checkNotNull($this->city,"city");
		RequestCheckUtil::checkMaxLength($this->city,20,"city");
		RequestCheckUtil::checkNotNull($this->description,"description");
		RequestCheckUtil::checkMaxLength($this->description,25000,"description");
		RequestCheckUtil::checkMaxValue($this->etcAutoRefund,100,"etcAutoRefund");
		RequestCheckUtil::checkMinValue($this->etcAutoRefund,0,"etcAutoRefund");
		RequestCheckUtil::checkMaxValue($this->etcOverduePay,100,"etcOverduePay");
		RequestCheckUtil::checkMinValue($this->etcOverduePay,0,"etcOverduePay");
		RequestCheckUtil::checkNotNull($this->image1,"image1");
		RequestCheckUtil::checkMaxLength($this->listTime,20,"listTime");
		RequestCheckUtil::checkNotNull($this->productId,"productId");
		RequestCheckUtil::checkNotNull($this->prov,"prov");
		RequestCheckUtil::checkMaxLength($this->prov,20,"prov");
		RequestCheckUtil::checkNotNull($this->sellerCsPhone,"sellerCsPhone");
		RequestCheckUtil::checkNotNull($this->skus,"skus");
		RequestCheckUtil::checkNotNull($this->subStockAtBuy,"subStockAtBuy");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkMaxLength($this->title,60,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
