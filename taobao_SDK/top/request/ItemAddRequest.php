<?php
/**
 * TOP API: taobao.item.add request
 * 
 * @author auto create
 * @since 1.0, 2015.11.23
 */
class ItemAddRequest
{
	/** 
	 * 售后说明模板id
	 **/
	private $afterSaleId;
	
	/** 
	 * 商品上传后的状态。可选值:onsale(出售中),instock(仓库中);默认值:onsale
	 **/
	private $approveStatus;
	
	/** 
	 * 商品的积分返点比例。如:5,表示:返点比例0.5%. 注意：返点比例必须是>0的整数，而且最大是90,即为9%.B商家在发布非虚拟商品时，返点必须是 5的倍数，即0.5%的倍数。其它是1的倍数，即0.1%的倍数。无名良品商家发布商品时，复用该字段记录积分宝返点比例，返点必须是对应类目的返点步长的整数倍，默认是5，即0.5%。注意此时该字段值依旧必须是>0的整数，最高值不超过500，即50%
	 **/
	private $auctionPoint;
	
	/** 
	 * 代充商品类型。在代充商品的类目下，不传表示不标记商品类型（交易搜索中就不能通过标记搜到相关的交易了）。可选类型： no_mark(不做类型标记) time_card(点卡软件代充) fee_card(话费软件代充)
	 **/
	private $autoFill;
	
	/** 
	 * 自动重发。可选值:true,false;默认值:false(不重发)
	 **/
	private $autoRepost;
	
	/** 
	 * 商品条形码
	 **/
	private $barcode;
	
	/** 
	 * 基础色数据
	 **/
	private $changeProp;
	
	/** 
	 * 天猫超市扩展字段，天猫超市专用。
	 **/
	private $chaoshiExtendsInfo;
	
	/** 
	 * 叶子类目id
	 **/
	private $cid;
	
	/** 
	 * 此为货到付款运费模板的ID，对应的JAVA类型是long,如果COD卖家应用了货到付款运费模板，此值要进行设置。该字段已经废弃
	 **/
	private $codPostageId;
	
	/** 
	 * 针对当前商品的标准属性值的补充说明，让买家更加了解商品信息减少交易纠纷
	 **/
	private $cpvMemo;
	
	/** 
	 * 定制工具Id如果支持定制市场，这个值不填写，就用之前的定制工具Id，之前的定制工具Id没有值就默认为-1
	 **/
	private $customMadeTypeId;
	
	/** 
	 * 商品级别设置的发货时间。设置了商品级别的发货时间，相对发货时间，则填写相对发货时间的天数（大于3）；绝对发货时间，则填写yyyy-mm-dd格式，如2013-11-11
	 **/
	private $deliveryTimeDeliveryTime;
	
	/** 
	 * 发货时间类型：绝对发货时间或者相对发货时间
	 **/
	private $deliveryTimeDeliveryTimeType;
	
	/** 
	 * 设置是否使用发货时间，商品级别，sku级别
	 **/
	private $deliveryTimeNeedDeliveryTime;
	
	/** 
	 * 宝贝描述。字数要大于5个字符，小于25000个字符，受违禁词控制
	 **/
	private $desc;
	
	/** 
	 * 商品描述模块化，模块列表，由List转化成jsonArray存入，后端逻辑验证通过，拼装成模块内容+锚点导航后存入desc中。数据结构具体参见Item_Desc_Module
	 **/
	private $descModules;
	
	/** 
	 * ems费用。取值范围:0.01-999.00;精确到2位小数;单位:元。如:25.07，表示:25元7分
	 **/
	private $emsFee;
	
	/** 
	 * 快递费用。取值范围:0.01-999.00;精确到2位小数;单位:元。如:15.07，表示:15元7分
	 **/
	private $expressFee;
	
	/** 
	 * 宝贝特征值，格式为：【key1:value1;key2:value2;key3:value3;】，key和value用【:】分隔，key&value之间用【;】分隔，只有在Top支持的特征值才能保存到宝贝上，目前支持的Key列表为：mysize_tp
	 **/
	private $features;
	
	/** 
	 * 厂家联系方式
	 **/
	private $foodSecurityContact;
	
	/** 
	 * 产品标准号
	 **/
	private $foodSecurityDesignCode;
	
	/** 
	 * 厂名
	 **/
	private $foodSecurityFactory;
	
	/** 
	 * 厂址
	 **/
	private $foodSecurityFactorySite;
	
	/** 
	 * 食品添加剂
	 **/
	private $foodSecurityFoodAdditive;
	
	/** 
	 * 健字号，保健品/膳食营养补充剂 这个类目下特有的信息，此类目下无需填写生产许可证编号（QS），如果填写了生产许可证编号（QS）将被忽略不保存；保存宝贝时，标题前会自动加上健字号产品名称一起作为宝贝标题；
	 **/
	private $foodSecurityHealthProductNo;
	
	/** 
	 * 配料表
	 **/
	private $foodSecurityMix;
	
	/** 
	 * 保质期
	 **/
	private $foodSecurityPeriod;
	
	/** 
	 * 储藏方法
	 **/
	private $foodSecurityPlanStorage;
	
	/** 
	 * 生产许可证号
	 **/
	private $foodSecurityPrdLicenseNo;
	
	/** 
	 * 生产结束日期,格式必须为yyyy-MM-dd
	 **/
	private $foodSecurityProductDateEnd;
	
	/** 
	 * 生产开始日期，格式必须为yyyy-MM-dd
	 **/
	private $foodSecurityProductDateStart;
	
	/** 
	 * 进货结束日期，要在生产日期之后，格式必须为yyyy-MM-dd
	 **/
	private $foodSecurityStockDateEnd;
	
	/** 
	 * 进货开始日期，要在生产日期之后，格式必须为yyyy-MM-dd
	 **/
	private $foodSecurityStockDateStart;
	
	/** 
	 * 供货商
	 **/
	private $foodSecuritySupplier;
	
	/** 
	 * 运费承担方式。可选值:seller（卖家承担）,buyer(买家承担);默认值:seller。卖家承担不用设置邮费和postage_id.买家承担的时候，必填邮费和postage_id 如果用户设置了运费模板会优先使用运费模板，否则要同步设置邮费（post_fee,express_fee,ems_fee）
	 **/
	private $freightPayer;
	
	/** 
	 * 全球购商品采购地（地区/国家）,默认值只在全球购商品采购地（库存类型选择情况生效），地区国家值为（美国, 香港, 日本, 英国, 新西兰, 德国, 韩国, 荷兰, 澳洲, 法国, 意大利, 台湾, 澳门, 加拿大, 瑞士, 西班牙, 泰国, 新加坡, 马来西亚, 菲律宾, 其他）
	 **/
	private $globalStockCountry;
	
	/** 
	 * 全球购商品发货地，发货地现在有两种类型：“国内”和“海外及港澳台”，参数值为1时代表“国内”，值为2时代表“海外及港澳台”，默认为国内。注意：卖家必须已经签署并启用“海外直邮”合约，才能选择发货地为“海外及港澳台”
	 **/
	private $globalStockDeliveryPlace;
	
	/** 
	 * 全球购商品卖家包税承诺，当值为true时，代表卖家承诺包税。注意：请与“全球购商品发货地”配合使用，包税承诺必须满足：1、发货地为海外及港澳台 2、卖家已经签署并启用“包税合约”合约
	 **/
	private $globalStockTaxFreePromise;
	
	/** 
	 * 全球购商品采购地（库存类型），有两种库存类型：现货和代购参数值为1时代表现货，值为2时代表代购。注意：使用时请与 全球购商品采购地（地区/国家）配合使用
	 **/
	private $globalStockType;
	
	/** 
	 * 支持会员打折。可选值:true,false;默认值:false(不打折)
	 **/
	private $hasDiscount;
	
	/** 
	 * 是否有发票。可选值:true,false (商城卖家此字段必须为true);默认值:false(无发票)
	 **/
	private $hasInvoice;
	
	/** 
	 * 橱窗推荐。可选值:true,false;默认值:false(不推荐)
	 **/
	private $hasShowcase;
	
	/** 
	 * 是否有保修。可选值:true,false;默认值:false(不保修)
	 **/
	private $hasWarranty;
	
	/** 
	 * 忽略警告提示.
	 **/
	private $ignorewarning;
	
	/** 
	 * 商品主图片。类型:JPG,GIF;最大长度:3M
	 **/
	private $image;
	
	/** 
	 * 加价(降价)幅度。如果为0，代表系统代理幅度。对于增价拍和荷兰拍来说是加价幅度，对于降价拍来说是降价幅度。
	 **/
	private $increment;
	
	/** 
	 * 针对当前商品的自定义属性值，目前是针对销售属性值自定义的，所以调用方需要把自定义属性值对应的虚拟属性值ID（负整数，例如例子中的 -1和-2）像标准属性值值的id一样设置到SKU上，如果自定义属性值有属性值图片，也要设置到属性图片上
	 **/
	private $inputCustomCpv;
	
	/** 
	 * 用户自行输入的类目属性ID串，结构："pid1,pid2,pid3"，如："20000"（表示品牌） 注：通常一个类目下用户可输入的关键属性不超过1个。
	 **/
	private $inputPids;
	
	/** 
	 * 用户自行输入的子属性名和属性值，结构:"父属性值;一级子属性名;一级子属性值;二级子属性名;自定义输入值,....",如：“耐克;耐克系列;科比系列;科比系列;2K5,Nike乔丹鞋;乔丹系列;乔丹鞋系列;乔丹鞋系列;json5”，多个自定义属性用','分割，input_str需要与input_pids一一对应，注：通常一个类目下用户可输入的关键属性不超过1个。所有属性别名加起来不能超过3999字节。此处不可以使用“其他”、“其它”和“其她”这三个词。
	 **/
	private $inputStr;
	
	/** 
	 * 是否是3D
	 **/
	private $is3D;
	
	/** 
	 * 是否在外店显示
	 **/
	private $isEx;
	
	/** 
	 * 实物闪电发货
	 **/
	private $isLightningConsignment;
	
	/** 
	 * 是否是线下商品。1：线上商品（默认值）；2：线上或线下商品；3：线下商品。
	 **/
	private $isOffline;
	
	/** 
	 * 是否在淘宝上显示（如果传FALSE，则在淘宝主站无法显示该商品）
	 **/
	private $isTaobao;
	
	/** 
	 * 商品是否为新品。只有在当前类目开通新品,并且当前用户拥有该类目下发布新品权限时才能设置is_xinpin为true，否则设置true后会返回错误码:isv.invalid-permission:add-xinpin。同时只有一口价全新的宝贝才能设置为新品，否则会返回错误码：isv.invalid-parameter:xinpin。不设置该参数值或设置为false效果一致。
	 **/
	private $isXinpin;
	
	/** 
	 * 表示商品的体积，如果需要使用按体积计费的运费模板，一定要设置这个值。该值的单位为立方米（m3），如果是其他单位，请转换成成立方米。该值支持两种格式的设置：格式1：bulk:3,单位为立方米(m3),表示直接设置为商品的体积。格式2：length:10;breadth:10;height:10，单位为米（m）。体积和长宽高都支持小数类型。在传入体积或长宽高时候，不能带单位。体积的单位默认为立方米（m3），长宽高的单位默认为米(m)该值支持两种格式的设置：格式1：bulk:3,单位为立方米(m3),表示直接设置为商品的体积。格式2：length:10;breadth:10;height:10，单位为米（m）
	 **/
	private $itemSize;
	
	/** 
	 * 商品的重量，用于按重量计费的运费模板。注意：单位为kg。只能传入数值类型（包含小数），不能带单位，单位默认为kg。
	 **/
	private $itemWeight;
	
	/** 
	 * 商品文字的字符集。繁体传入"zh_HK"，简体传入"zh_CN"，不传默认为简体
	 **/
	private $lang;
	
	/** 
	 * 定时上架时间。(时间格式：yyyy-MM-dd HH:mm:ss)
	 **/
	private $listTime;
	
	/** 
	 * 发布电子凭证宝贝时候表示是否使用邮寄 0: 代表不使用邮寄； 1：代表使用邮寄；如果不设置这个值，代表不使用邮寄
	 **/
	private $localityLifeChooseLogis;
	
	/** 
	 * 电子凭证业务属性，数据字典是: 1、is_card:1 (暂时不用) 2、consume_way:4 （1 串码 ，4 身份证）3、consume_midmnick ：(核销放行账号:用户id-用户名，支持多个，用逗号分隔,例如 1234-测试账号35,1345-测试账号56）4、market:eticket (电子凭证商品标记) 5、has_pos:1 (1 表示商品配置线下门店，在detail上进行展示 ，没有或者其他值只不展示)格式是: k1:v2;k2:v2;........ 如：has_pos:1;market:eticket;consume_midmnick:901409638-OPPO;consume_way:4
	 **/
	private $localityLifeEticket;
	
	/** 
	 * 本地生活电子交易凭证业务，目前此字段只涉及到的信息为有效期;如果有效期为起止日期类型，此值为2012-08-06,2012-08-16如果有效期为【购买成功日 至】类型则格式为2012-08-16如果有效期为天数类型则格式为15
	 **/
	private $localityLifeExpirydate;
	
	/** 
	 * 码商信息，格式为 码商id:nick
	 **/
	private $localityLifeMerchant;
	
	/** 
	 * 网点ID
	 **/
	private $localityLifeNetworkId;
	
	/** 
	 * 预约门店是否支持门店自提,1:是
	 **/
	private $localityLifeObs;
	
	/** 
	 * 电子凭证售中自动退款比例，百分比%前的数字，介于1-100之间的整数
	 **/
	private $localityLifeOnsaleAutoRefundRatio;
	
	/** 
	 * 新版电子凭证包 id
	 **/
	private $localityLifePackageid;
	
	/** 
	 * 退款比例，百分比%前的数字,1-100的正整数值
	 **/
	private $localityLifeRefundRatio;
	
	/** 
	 * 退款码费承担方。发布电子凭证宝贝的时候会增加“退款码费承担方”配置项，可选填：(1)s（卖家承担） (2)b(买家承担)
	 **/
	private $localityLifeRefundmafee;
	
	/** 
	 * 核销打款 1代表核销打款 0代表非核销打款
	 **/
	private $localityLifeVerification;
	
	/** 
	 * 新版电子凭证字段
	 **/
	private $localityLifeVersion;
	
	/** 
	 * 所在地城市。如杭州 。
	 **/
	private $locationCity;
	
	/** 
	 * 所在地省份。如浙江
	 **/
	private $locationState;
	
	/** 
	 * 订金。在“线上付订金线下付尾款”模式中，有订金、尾款可抵扣金额和参考价，三者需要同时填写。该商品订单首次支付价格为 订金 价格，用户可根据 参考价 估算全款。该模式有别于“一口价”付款方式，针对一个商品，只能选择两种付款方式中的一种，其适用于家装、二手车等场景。详见说明：http://bangpai.taobao.com/group/thread/15031186-303287205.htm
	 **/
	private $msPaymentPrice;
	
	/** 
	 * 参考价。该商品订单首次支付价格为 订金 价格，用户可根据 参考价 估算全款。详见说明：http://bangpai.taobao.com/group/thread/15031186-303287205.htm
	 **/
	private $msPaymentReferencePrice;
	
	/** 
	 * 尾款可抵扣金额。详见说明：http://bangpai.taobao.com/group/thread/15031186-303287205.htm
	 **/
	private $msPaymentVoucherPrice;
	
	/** 
	 * 该宝贝是否支持【7天无理由退货】，卖家选择的值只是一个因素，最终以类目和选择的属性条件来确定是否支持7天。填入字符0，表示不支持；未填写或填人字符1，表示支持7天无理由退货；
	 **/
	private $newprepay;
	
	/** 
	 * 商品数量。取值范围:0-900000000的整数。且需要等于Sku所有数量的和。拍卖商品中增加拍只能为1，荷兰拍要在[2,500)范围内。
	 **/
	private $num;
	
	/** 
	 * 汽车O2O绑定线下服务标记，如不为空，表示关联服务，否则，不关联服务。
	 **/
	private $o2oBindService;
	
	/** 
	 * 商品外部编码，该字段的最大长度是64个字节
	 **/
	private $outerId;
	
	/** 
	 * 拍卖宝贝的保证金。对于增价拍和荷兰拍来说保证金有两种模式：淘宝默认模式（首次出价金额的10%），自定义固定保证金（固定冻结金额只能输入不超过30万的正整数），并且保证金只冻结1次。对于降价拍来说保证金只有淘宝默认的（竞拍价格的10% * 竞拍数量），并且每次出价都需要冻结保证金。对于拍卖宝贝来说，保证金是必须的，但是默认使用淘宝默认保证金模式，只有用户需要使用自定义固定保证金的时候才需要使用到这个参数，如果该参数不传或传入0则代表使用默认。
	 **/
	private $paimaiInfoDeposit;
	
	/** 
	 * 降价拍宝贝的降价周期(分钟)。降价拍宝贝的价格每隔paimai_info.interval时间会下降一次increment。
	 **/
	private $paimaiInfoInterval;
	
	/** 
	 * 拍卖商品选择的拍卖类型，拍卖类型包括三种：增价拍(1)，荷兰拍(2)和降价拍(3)。
	 **/
	private $paimaiInfoMode;
	
	/** 
	 * 降价拍宝贝的保留价。对于降价拍来说，paimai_info.reserve必须大于0，且小于price-increment，而且（price-paimai_info.reserve）/increment的计算结果必须为整数
	 **/
	private $paimaiInfoReserve;
	
	/** 
	 * 自定义销售周期的小时数。拍卖宝贝可以自定义销售周期，这里指定销售周期的小时数。注意，该参数只作为输入参数，不能通过taobao.item.get接口获取。
	 **/
	private $paimaiInfoValidHour;
	
	/** 
	 * 自定义销售周期的分钟数。拍卖宝贝可以自定义销售周期，这里是指定销售周期的分钟数。自定义销售周期的小时数。拍卖宝贝可以自定义销售周期，这里指定销售周期的小时数。注意，该参数只作为输入参数，不能通过taobao.item.get接口获取。
	 **/
	private $paimaiInfoValidMinute;
	
	/** 
	 * 商品主图需要关联的图片空间的相对url。这个url所对应的图片必须要属于当前用户。pic_path和image只需要传入一个,如果两个都传，默认选择pic_path
	 **/
	private $picPath;
	
	/** 
	 * 平邮费用。取值范围:0.01-999.00;精确到2位小数;单位:元。如:5.07，表示:5元7分. 注:post_fee,express_fee,ems_fee需要一起填写
	 **/
	private $postFee;
	
	/** 
	 * 宝贝所属的运费模板ID。取值范围：整数且必须是该卖家的运费模板的ID（可通过taobao.delivery.template.get获得当前会话用户的所有邮费模板）
	 **/
	private $postageId;
	
	/** 
	 * 商品价格。取值范围:0-100000000;精确到2位小数;单位:元。如:200.07，表示:200元7分。需要在正确的价格区间内。拍卖商品对应的起拍价。
	 **/
	private $price;
	
	/** 
	 * 商品所属的产品ID(B商家发布商品需要用)
	 **/
	private $productId;
	
	/** 
	 * 属性值别名。如pid:vid:别名;pid1:vid1:别名1 ，其中：pid是属性id vid是属性值id。总长度不超过512字节
	 **/
	private $propertyAlias;
	
	/** 
	 * 商品属性列表。格式:pid:vid;pid:vid。属性的pid调用taobao.itemprops.get取得，属性值的vid用taobao.itempropvalues.get取得vid。 如果该类目下面没有属性，可以不用填写。如果有属性，必选属性必填，其他非必选属性可以选择不填写.属性不能超过35对。所有属性加起来包括分割符不能超过549字节，单个属性没有限制。 如果有属性是可输入的话，则用字段input_str填入属性的值
	 **/
	private $props;
	
	/** 
	 * 商品资质信息
	 **/
	private $qualification;
	
	/** 
	 * 景区门票在选择订金支付时候，需要交的预订费。传入的值是1到20之间的数值，小数点后最多可以保留两位（多余的部分将做四舍五入的处理）。这个数值表示的是预订费的比例，最终的预订费为 scenic_ticket_book_cost乘一口价除以100
	 **/
	private $scenicTicketBookCost;
	
	/** 
	 * 景区门票类宝贝发布时候，当卖家签订了支付宝代扣协议时候，需要选择支付方式：全额支付和订金支付。当scenic_ticket_pay_way为1时表示全额支付，为2时表示订金支付
	 **/
	private $scenicTicketPayWay;
	
	/** 
	 * 商品卖点信息，最长150个字符。天猫商家和集市卖家都可用。
	 **/
	private $sellPoint;
	
	/** 
	 * 是否承诺退换货服务!虚拟商品无须设置此项!
	 **/
	private $sellPromise;
	
	/** 
	 * 商品所属的店铺类目列表。按逗号分隔。结构:",cid1,cid2,...,"，如果店铺类目存在二级类目，必须传入子类目cids。
	 **/
	private $sellerCids;
	
	/** 
	 * 宝贝形态:1代表电子券;0或其他代表实物
	 **/
	private $shape;
	
	/** 
	 * sku层面的条形码，多个SKU情况，与SKU价格库存格式类似，用逗号分隔
	 **/
	private $skuBarcode;
	
	/** 
	 * 此参数暂时不起作用
	 **/
	private $skuDeliveryTimes;
	
	/** 
	 * 家装建材类目，商品SKU的高度，单位为cm，部分类目必选。天猫商家专用。 可选值为："0-15", "15-25", "25-50", "50-60", "60-80", "80-120", "120-160", "160-200"。 数据和SKU一一对应，用,分隔，如：15-25,25-50,25-50
	 **/
	private $skuHdHeight;
	
	/** 
	 * 家装建材类目，商品SKU的灯头数量，正整数，大于等于3，部分类目必选。天猫商家专用。 数据和SKU一一对应，用,分隔，如：3,5,7
	 **/
	private $skuHdLampQuantity;
	
	/** 
	 * 家装建材类目，商品SKU的长度，正整数，单位为cm，部分类目必选。天猫商家专用。 数据和SKU一一对应，用,分隔，如：20,30,30
	 **/
	private $skuHdLength;
	
	/** 
	 * Sku的外部id串，结构如：1234,1342,… sku_properties, sku_quantities, sku_prices, sku_outer_ids在输入数据时要一一对应，如果没有sku_outer_ids也要写上这个参数，入参是","(这个是两个sku的示列，逗号数应该是sku个数减1)；该参数最大长度是512个字节
	 **/
	private $skuOuterIds;
	
	/** 
	 * Sku的价格串，结构如：10.00,5.00,… 精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	private $skuPrices;
	
	/** 
	 * 更新的sku的属性串，调用taobao.itemprops.get获取。格式:pid1:vid;pid2:vid,多个sku属性之间用逗号分隔。该字段内的属性需要在props字段同时包含。如果新增商品包含了sku，则此字段一定要传入,字段长度要控制在512个字节以内。
	 **/
	private $skuProperties;
	
	/** 
	 * Sku的数量串，结构如：num1,num2,num3 如：2,3
	 **/
	private $skuQuantities;
	
	/** 
	 * 此参数暂时不起作用
	 **/
	private $skuSpecIds;
	
	/** 
	 * 手机类目spu 优化，信息确认字段
	 **/
	private $spuConfirm;
	
	/** 
	 * 新旧程度。可选值：new(新)，second(二手)。B商家不能发布二手商品。如果是二手商品，特定类目下属性里面必填新旧成色属性
	 **/
	private $stuffStatus;
	
	/** 
	 * 商品是否支持拍下减库存:1支持;2取消支持(付款减库存);0(默认)不更改集市卖家默认拍下减库存;商城卖家默认付款减库存
	 **/
	private $subStock;
	
	/** 
	 * 是否支持定制市场 true代表支持，false代表支持,如果为空代表与之前保持不变不会修改
	 **/
	private $supportCustomMade;
	
	/** 
	 * 宝贝标题。不能超过30字符，受违禁词控制。天猫图书管控类目最大允许120字符；
	 **/
	private $title;
	
	/** 
	 * 发布类型。可选值:fixed(一口价),auction(拍卖)。B商家不能发布拍卖商品，而且拍卖商品是没有SKU的。拍卖商品发布时需要附加拍卖商品信息：拍卖类型(paimai_info.mode，拍卖类型包括三种：增价拍[1]，荷兰拍[2]以及降价拍[3])，商品数量(num)，起拍价(price)，价格幅度(increament)，保证金(paimai_info.deposit)。另外拍卖商品支持自定义销售周期，通过paimai_info.valid_hour和paimai_info.valid_minute来指定。对于降价拍来说需要设置降价周期(paimai_info.interval)和拍卖保留价(paimai_info.reserve)。注意：通过taobao.item.get接口获取拍卖信息时，会返回除了valid_hour和valid_minute之外的所有拍卖信息。
	 **/
	private $type;
	
	/** 
	 * 有效期。可选值:7,14;单位:天;默认值:14
	 **/
	private $validThru;
	
	/** 
	 * 商品的重量(商超卖家专用字段)
	 **/
	private $weight;
	
	/** 
	 * 无线的宝贝描述
	 **/
	private $wirelessDesc;
	
	private $apiParas = array();
	
	public function setAfterSaleId($afterSaleId)
	{
		$this->afterSaleId = $afterSaleId;
		$this->apiParas["after_sale_id"] = $afterSaleId;
	}

	public function getAfterSaleId()
	{
		return $this->afterSaleId;
	}

	public function setApproveStatus($approveStatus)
	{
		$this->approveStatus = $approveStatus;
		$this->apiParas["approve_status"] = $approveStatus;
	}

	public function getApproveStatus()
	{
		return $this->approveStatus;
	}

	public function setAuctionPoint($auctionPoint)
	{
		$this->auctionPoint = $auctionPoint;
		$this->apiParas["auction_point"] = $auctionPoint;
	}

	public function getAuctionPoint()
	{
		return $this->auctionPoint;
	}

	public function setAutoFill($autoFill)
	{
		$this->autoFill = $autoFill;
		$this->apiParas["auto_fill"] = $autoFill;
	}

	public function getAutoFill()
	{
		return $this->autoFill;
	}

	public function setAutoRepost($autoRepost)
	{
		$this->autoRepost = $autoRepost;
		$this->apiParas["auto_repost"] = $autoRepost;
	}

	public function getAutoRepost()
	{
		return $this->autoRepost;
	}

	public function setBarcode($barcode)
	{
		$this->barcode = $barcode;
		$this->apiParas["barcode"] = $barcode;
	}

	public function getBarcode()
	{
		return $this->barcode;
	}

	public function setChangeProp($changeProp)
	{
		$this->changeProp = $changeProp;
		$this->apiParas["change_prop"] = $changeProp;
	}

	public function getChangeProp()
	{
		return $this->changeProp;
	}

	public function setChaoshiExtendsInfo($chaoshiExtendsInfo)
	{
		$this->chaoshiExtendsInfo = $chaoshiExtendsInfo;
		$this->apiParas["chaoshi_extends_info"] = $chaoshiExtendsInfo;
	}

	public function getChaoshiExtendsInfo()
	{
		return $this->chaoshiExtendsInfo;
	}

	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function setCodPostageId($codPostageId)
	{
		$this->codPostageId = $codPostageId;
		$this->apiParas["cod_postage_id"] = $codPostageId;
	}

	public function getCodPostageId()
	{
		return $this->codPostageId;
	}

	public function setCpvMemo($cpvMemo)
	{
		$this->cpvMemo = $cpvMemo;
		$this->apiParas["cpv_memo"] = $cpvMemo;
	}

	public function getCpvMemo()
	{
		return $this->cpvMemo;
	}

	public function setCustomMadeTypeId($customMadeTypeId)
	{
		$this->customMadeTypeId = $customMadeTypeId;
		$this->apiParas["custom_made_type_id"] = $customMadeTypeId;
	}

	public function getCustomMadeTypeId()
	{
		return $this->customMadeTypeId;
	}

	public function setDeliveryTimeDeliveryTime($deliveryTimeDeliveryTime)
	{
		$this->deliveryTimeDeliveryTime = $deliveryTimeDeliveryTime;
		$this->apiParas["delivery_time.delivery_time"] = $deliveryTimeDeliveryTime;
	}

	public function getDeliveryTimeDeliveryTime()
	{
		return $this->deliveryTimeDeliveryTime;
	}

	public function setDeliveryTimeDeliveryTimeType($deliveryTimeDeliveryTimeType)
	{
		$this->deliveryTimeDeliveryTimeType = $deliveryTimeDeliveryTimeType;
		$this->apiParas["delivery_time.delivery_time_type"] = $deliveryTimeDeliveryTimeType;
	}

	public function getDeliveryTimeDeliveryTimeType()
	{
		return $this->deliveryTimeDeliveryTimeType;
	}

	public function setDeliveryTimeNeedDeliveryTime($deliveryTimeNeedDeliveryTime)
	{
		$this->deliveryTimeNeedDeliveryTime = $deliveryTimeNeedDeliveryTime;
		$this->apiParas["delivery_time.need_delivery_time"] = $deliveryTimeNeedDeliveryTime;
	}

	public function getDeliveryTimeNeedDeliveryTime()
	{
		return $this->deliveryTimeNeedDeliveryTime;
	}

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setDescModules($descModules)
	{
		$this->descModules = $descModules;
		$this->apiParas["desc_modules"] = $descModules;
	}

	public function getDescModules()
	{
		return $this->descModules;
	}

	public function setEmsFee($emsFee)
	{
		$this->emsFee = $emsFee;
		$this->apiParas["ems_fee"] = $emsFee;
	}

	public function getEmsFee()
	{
		return $this->emsFee;
	}

	public function setExpressFee($expressFee)
	{
		$this->expressFee = $expressFee;
		$this->apiParas["express_fee"] = $expressFee;
	}

	public function getExpressFee()
	{
		return $this->expressFee;
	}

	public function setFeatures($features)
	{
		$this->features = $features;
		$this->apiParas["features"] = $features;
	}

	public function getFeatures()
	{
		return $this->features;
	}

	public function setFoodSecurityContact($foodSecurityContact)
	{
		$this->foodSecurityContact = $foodSecurityContact;
		$this->apiParas["food_security.contact"] = $foodSecurityContact;
	}

	public function getFoodSecurityContact()
	{
		return $this->foodSecurityContact;
	}

	public function setFoodSecurityDesignCode($foodSecurityDesignCode)
	{
		$this->foodSecurityDesignCode = $foodSecurityDesignCode;
		$this->apiParas["food_security.design_code"] = $foodSecurityDesignCode;
	}

	public function getFoodSecurityDesignCode()
	{
		return $this->foodSecurityDesignCode;
	}

	public function setFoodSecurityFactory($foodSecurityFactory)
	{
		$this->foodSecurityFactory = $foodSecurityFactory;
		$this->apiParas["food_security.factory"] = $foodSecurityFactory;
	}

	public function getFoodSecurityFactory()
	{
		return $this->foodSecurityFactory;
	}

	public function setFoodSecurityFactorySite($foodSecurityFactorySite)
	{
		$this->foodSecurityFactorySite = $foodSecurityFactorySite;
		$this->apiParas["food_security.factory_site"] = $foodSecurityFactorySite;
	}

	public function getFoodSecurityFactorySite()
	{
		return $this->foodSecurityFactorySite;
	}

	public function setFoodSecurityFoodAdditive($foodSecurityFoodAdditive)
	{
		$this->foodSecurityFoodAdditive = $foodSecurityFoodAdditive;
		$this->apiParas["food_security.food_additive"] = $foodSecurityFoodAdditive;
	}

	public function getFoodSecurityFoodAdditive()
	{
		return $this->foodSecurityFoodAdditive;
	}

	public function setFoodSecurityHealthProductNo($foodSecurityHealthProductNo)
	{
		$this->foodSecurityHealthProductNo = $foodSecurityHealthProductNo;
		$this->apiParas["food_security.health_product_no"] = $foodSecurityHealthProductNo;
	}

	public function getFoodSecurityHealthProductNo()
	{
		return $this->foodSecurityHealthProductNo;
	}

	public function setFoodSecurityMix($foodSecurityMix)
	{
		$this->foodSecurityMix = $foodSecurityMix;
		$this->apiParas["food_security.mix"] = $foodSecurityMix;
	}

	public function getFoodSecurityMix()
	{
		return $this->foodSecurityMix;
	}

	public function setFoodSecurityPeriod($foodSecurityPeriod)
	{
		$this->foodSecurityPeriod = $foodSecurityPeriod;
		$this->apiParas["food_security.period"] = $foodSecurityPeriod;
	}

	public function getFoodSecurityPeriod()
	{
		return $this->foodSecurityPeriod;
	}

	public function setFoodSecurityPlanStorage($foodSecurityPlanStorage)
	{
		$this->foodSecurityPlanStorage = $foodSecurityPlanStorage;
		$this->apiParas["food_security.plan_storage"] = $foodSecurityPlanStorage;
	}

	public function getFoodSecurityPlanStorage()
	{
		return $this->foodSecurityPlanStorage;
	}

	public function setFoodSecurityPrdLicenseNo($foodSecurityPrdLicenseNo)
	{
		$this->foodSecurityPrdLicenseNo = $foodSecurityPrdLicenseNo;
		$this->apiParas["food_security.prd_license_no"] = $foodSecurityPrdLicenseNo;
	}

	public function getFoodSecurityPrdLicenseNo()
	{
		return $this->foodSecurityPrdLicenseNo;
	}

	public function setFoodSecurityProductDateEnd($foodSecurityProductDateEnd)
	{
		$this->foodSecurityProductDateEnd = $foodSecurityProductDateEnd;
		$this->apiParas["food_security.product_date_end"] = $foodSecurityProductDateEnd;
	}

	public function getFoodSecurityProductDateEnd()
	{
		return $this->foodSecurityProductDateEnd;
	}

	public function setFoodSecurityProductDateStart($foodSecurityProductDateStart)
	{
		$this->foodSecurityProductDateStart = $foodSecurityProductDateStart;
		$this->apiParas["food_security.product_date_start"] = $foodSecurityProductDateStart;
	}

	public function getFoodSecurityProductDateStart()
	{
		return $this->foodSecurityProductDateStart;
	}

	public function setFoodSecurityStockDateEnd($foodSecurityStockDateEnd)
	{
		$this->foodSecurityStockDateEnd = $foodSecurityStockDateEnd;
		$this->apiParas["food_security.stock_date_end"] = $foodSecurityStockDateEnd;
	}

	public function getFoodSecurityStockDateEnd()
	{
		return $this->foodSecurityStockDateEnd;
	}

	public function setFoodSecurityStockDateStart($foodSecurityStockDateStart)
	{
		$this->foodSecurityStockDateStart = $foodSecurityStockDateStart;
		$this->apiParas["food_security.stock_date_start"] = $foodSecurityStockDateStart;
	}

	public function getFoodSecurityStockDateStart()
	{
		return $this->foodSecurityStockDateStart;
	}

	public function setFoodSecuritySupplier($foodSecuritySupplier)
	{
		$this->foodSecuritySupplier = $foodSecuritySupplier;
		$this->apiParas["food_security.supplier"] = $foodSecuritySupplier;
	}

	public function getFoodSecuritySupplier()
	{
		return $this->foodSecuritySupplier;
	}

	public function setFreightPayer($freightPayer)
	{
		$this->freightPayer = $freightPayer;
		$this->apiParas["freight_payer"] = $freightPayer;
	}

	public function getFreightPayer()
	{
		return $this->freightPayer;
	}

	public function setGlobalStockCountry($globalStockCountry)
	{
		$this->globalStockCountry = $globalStockCountry;
		$this->apiParas["global_stock_country"] = $globalStockCountry;
	}

	public function getGlobalStockCountry()
	{
		return $this->globalStockCountry;
	}

	public function setGlobalStockDeliveryPlace($globalStockDeliveryPlace)
	{
		$this->globalStockDeliveryPlace = $globalStockDeliveryPlace;
		$this->apiParas["global_stock_delivery_place"] = $globalStockDeliveryPlace;
	}

	public function getGlobalStockDeliveryPlace()
	{
		return $this->globalStockDeliveryPlace;
	}

	public function setGlobalStockTaxFreePromise($globalStockTaxFreePromise)
	{
		$this->globalStockTaxFreePromise = $globalStockTaxFreePromise;
		$this->apiParas["global_stock_tax_free_promise"] = $globalStockTaxFreePromise;
	}

	public function getGlobalStockTaxFreePromise()
	{
		return $this->globalStockTaxFreePromise;
	}

	public function setGlobalStockType($globalStockType)
	{
		$this->globalStockType = $globalStockType;
		$this->apiParas["global_stock_type"] = $globalStockType;
	}

	public function getGlobalStockType()
	{
		return $this->globalStockType;
	}

	public function setHasDiscount($hasDiscount)
	{
		$this->hasDiscount = $hasDiscount;
		$this->apiParas["has_discount"] = $hasDiscount;
	}

	public function getHasDiscount()
	{
		return $this->hasDiscount;
	}

	public function setHasInvoice($hasInvoice)
	{
		$this->hasInvoice = $hasInvoice;
		$this->apiParas["has_invoice"] = $hasInvoice;
	}

	public function getHasInvoice()
	{
		return $this->hasInvoice;
	}

	public function setHasShowcase($hasShowcase)
	{
		$this->hasShowcase = $hasShowcase;
		$this->apiParas["has_showcase"] = $hasShowcase;
	}

	public function getHasShowcase()
	{
		return $this->hasShowcase;
	}

	public function setHasWarranty($hasWarranty)
	{
		$this->hasWarranty = $hasWarranty;
		$this->apiParas["has_warranty"] = $hasWarranty;
	}

	public function getHasWarranty()
	{
		return $this->hasWarranty;
	}

	public function setIgnorewarning($ignorewarning)
	{
		$this->ignorewarning = $ignorewarning;
		$this->apiParas["ignorewarning"] = $ignorewarning;
	}

	public function getIgnorewarning()
	{
		return $this->ignorewarning;
	}

	public function setImage($image)
	{
		$this->image = $image;
		$this->apiParas["image"] = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setIncrement($increment)
	{
		$this->increment = $increment;
		$this->apiParas["increment"] = $increment;
	}

	public function getIncrement()
	{
		return $this->increment;
	}

	public function setInputCustomCpv($inputCustomCpv)
	{
		$this->inputCustomCpv = $inputCustomCpv;
		$this->apiParas["input_custom_cpv"] = $inputCustomCpv;
	}

	public function getInputCustomCpv()
	{
		return $this->inputCustomCpv;
	}

	public function setInputPids($inputPids)
	{
		$this->inputPids = $inputPids;
		$this->apiParas["input_pids"] = $inputPids;
	}

	public function getInputPids()
	{
		return $this->inputPids;
	}

	public function setInputStr($inputStr)
	{
		$this->inputStr = $inputStr;
		$this->apiParas["input_str"] = $inputStr;
	}

	public function getInputStr()
	{
		return $this->inputStr;
	}

	public function setIs3D($is3D)
	{
		$this->is3D = $is3D;
		$this->apiParas["is_3D"] = $is3D;
	}

	public function getIs3D()
	{
		return $this->is3D;
	}

	public function setIsEx($isEx)
	{
		$this->isEx = $isEx;
		$this->apiParas["is_ex"] = $isEx;
	}

	public function getIsEx()
	{
		return $this->isEx;
	}

	public function setIsLightningConsignment($isLightningConsignment)
	{
		$this->isLightningConsignment = $isLightningConsignment;
		$this->apiParas["is_lightning_consignment"] = $isLightningConsignment;
	}

	public function getIsLightningConsignment()
	{
		return $this->isLightningConsignment;
	}

	public function setIsOffline($isOffline)
	{
		$this->isOffline = $isOffline;
		$this->apiParas["is_offline"] = $isOffline;
	}

	public function getIsOffline()
	{
		return $this->isOffline;
	}

	public function setIsTaobao($isTaobao)
	{
		$this->isTaobao = $isTaobao;
		$this->apiParas["is_taobao"] = $isTaobao;
	}

	public function getIsTaobao()
	{
		return $this->isTaobao;
	}

	public function setIsXinpin($isXinpin)
	{
		$this->isXinpin = $isXinpin;
		$this->apiParas["is_xinpin"] = $isXinpin;
	}

	public function getIsXinpin()
	{
		return $this->isXinpin;
	}

	public function setItemSize($itemSize)
	{
		$this->itemSize = $itemSize;
		$this->apiParas["item_size"] = $itemSize;
	}

	public function getItemSize()
	{
		return $this->itemSize;
	}

	public function setItemWeight($itemWeight)
	{
		$this->itemWeight = $itemWeight;
		$this->apiParas["item_weight"] = $itemWeight;
	}

	public function getItemWeight()
	{
		return $this->itemWeight;
	}

	public function setLang($lang)
	{
		$this->lang = $lang;
		$this->apiParas["lang"] = $lang;
	}

	public function getLang()
	{
		return $this->lang;
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

	public function setLocalityLifeChooseLogis($localityLifeChooseLogis)
	{
		$this->localityLifeChooseLogis = $localityLifeChooseLogis;
		$this->apiParas["locality_life.choose_logis"] = $localityLifeChooseLogis;
	}

	public function getLocalityLifeChooseLogis()
	{
		return $this->localityLifeChooseLogis;
	}

	public function setLocalityLifeEticket($localityLifeEticket)
	{
		$this->localityLifeEticket = $localityLifeEticket;
		$this->apiParas["locality_life.eticket"] = $localityLifeEticket;
	}

	public function getLocalityLifeEticket()
	{
		return $this->localityLifeEticket;
	}

	public function setLocalityLifeExpirydate($localityLifeExpirydate)
	{
		$this->localityLifeExpirydate = $localityLifeExpirydate;
		$this->apiParas["locality_life.expirydate"] = $localityLifeExpirydate;
	}

	public function getLocalityLifeExpirydate()
	{
		return $this->localityLifeExpirydate;
	}

	public function setLocalityLifeMerchant($localityLifeMerchant)
	{
		$this->localityLifeMerchant = $localityLifeMerchant;
		$this->apiParas["locality_life.merchant"] = $localityLifeMerchant;
	}

	public function getLocalityLifeMerchant()
	{
		return $this->localityLifeMerchant;
	}

	public function setLocalityLifeNetworkId($localityLifeNetworkId)
	{
		$this->localityLifeNetworkId = $localityLifeNetworkId;
		$this->apiParas["locality_life.network_id"] = $localityLifeNetworkId;
	}

	public function getLocalityLifeNetworkId()
	{
		return $this->localityLifeNetworkId;
	}

	public function setLocalityLifeObs($localityLifeObs)
	{
		$this->localityLifeObs = $localityLifeObs;
		$this->apiParas["locality_life.obs"] = $localityLifeObs;
	}

	public function getLocalityLifeObs()
	{
		return $this->localityLifeObs;
	}

	public function setLocalityLifeOnsaleAutoRefundRatio($localityLifeOnsaleAutoRefundRatio)
	{
		$this->localityLifeOnsaleAutoRefundRatio = $localityLifeOnsaleAutoRefundRatio;
		$this->apiParas["locality_life.onsale_auto_refund_ratio"] = $localityLifeOnsaleAutoRefundRatio;
	}

	public function getLocalityLifeOnsaleAutoRefundRatio()
	{
		return $this->localityLifeOnsaleAutoRefundRatio;
	}

	public function setLocalityLifePackageid($localityLifePackageid)
	{
		$this->localityLifePackageid = $localityLifePackageid;
		$this->apiParas["locality_life.packageid"] = $localityLifePackageid;
	}

	public function getLocalityLifePackageid()
	{
		return $this->localityLifePackageid;
	}

	public function setLocalityLifeRefundRatio($localityLifeRefundRatio)
	{
		$this->localityLifeRefundRatio = $localityLifeRefundRatio;
		$this->apiParas["locality_life.refund_ratio"] = $localityLifeRefundRatio;
	}

	public function getLocalityLifeRefundRatio()
	{
		return $this->localityLifeRefundRatio;
	}

	public function setLocalityLifeRefundmafee($localityLifeRefundmafee)
	{
		$this->localityLifeRefundmafee = $localityLifeRefundmafee;
		$this->apiParas["locality_life.refundmafee"] = $localityLifeRefundmafee;
	}

	public function getLocalityLifeRefundmafee()
	{
		return $this->localityLifeRefundmafee;
	}

	public function setLocalityLifeVerification($localityLifeVerification)
	{
		$this->localityLifeVerification = $localityLifeVerification;
		$this->apiParas["locality_life.verification"] = $localityLifeVerification;
	}

	public function getLocalityLifeVerification()
	{
		return $this->localityLifeVerification;
	}

	public function setLocalityLifeVersion($localityLifeVersion)
	{
		$this->localityLifeVersion = $localityLifeVersion;
		$this->apiParas["locality_life.version"] = $localityLifeVersion;
	}

	public function getLocalityLifeVersion()
	{
		return $this->localityLifeVersion;
	}

	public function setLocationCity($locationCity)
	{
		$this->locationCity = $locationCity;
		$this->apiParas["location.city"] = $locationCity;
	}

	public function getLocationCity()
	{
		return $this->locationCity;
	}

	public function setLocationState($locationState)
	{
		$this->locationState = $locationState;
		$this->apiParas["location.state"] = $locationState;
	}

	public function getLocationState()
	{
		return $this->locationState;
	}

	public function setMsPaymentPrice($msPaymentPrice)
	{
		$this->msPaymentPrice = $msPaymentPrice;
		$this->apiParas["ms_payment.price"] = $msPaymentPrice;
	}

	public function getMsPaymentPrice()
	{
		return $this->msPaymentPrice;
	}

	public function setMsPaymentReferencePrice($msPaymentReferencePrice)
	{
		$this->msPaymentReferencePrice = $msPaymentReferencePrice;
		$this->apiParas["ms_payment.reference_price"] = $msPaymentReferencePrice;
	}

	public function getMsPaymentReferencePrice()
	{
		return $this->msPaymentReferencePrice;
	}

	public function setMsPaymentVoucherPrice($msPaymentVoucherPrice)
	{
		$this->msPaymentVoucherPrice = $msPaymentVoucherPrice;
		$this->apiParas["ms_payment.voucher_price"] = $msPaymentVoucherPrice;
	}

	public function getMsPaymentVoucherPrice()
	{
		return $this->msPaymentVoucherPrice;
	}

	public function setNewprepay($newprepay)
	{
		$this->newprepay = $newprepay;
		$this->apiParas["newprepay"] = $newprepay;
	}

	public function getNewprepay()
	{
		return $this->newprepay;
	}

	public function setNum($num)
	{
		$this->num = $num;
		$this->apiParas["num"] = $num;
	}

	public function getNum()
	{
		return $this->num;
	}

	public function setO2oBindService($o2oBindService)
	{
		$this->o2oBindService = $o2oBindService;
		$this->apiParas["o2o_bind_service"] = $o2oBindService;
	}

	public function getO2oBindService()
	{
		return $this->o2oBindService;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setPaimaiInfoDeposit($paimaiInfoDeposit)
	{
		$this->paimaiInfoDeposit = $paimaiInfoDeposit;
		$this->apiParas["paimai_info.deposit"] = $paimaiInfoDeposit;
	}

	public function getPaimaiInfoDeposit()
	{
		return $this->paimaiInfoDeposit;
	}

	public function setPaimaiInfoInterval($paimaiInfoInterval)
	{
		$this->paimaiInfoInterval = $paimaiInfoInterval;
		$this->apiParas["paimai_info.interval"] = $paimaiInfoInterval;
	}

	public function getPaimaiInfoInterval()
	{
		return $this->paimaiInfoInterval;
	}

	public function setPaimaiInfoMode($paimaiInfoMode)
	{
		$this->paimaiInfoMode = $paimaiInfoMode;
		$this->apiParas["paimai_info.mode"] = $paimaiInfoMode;
	}

	public function getPaimaiInfoMode()
	{
		return $this->paimaiInfoMode;
	}

	public function setPaimaiInfoReserve($paimaiInfoReserve)
	{
		$this->paimaiInfoReserve = $paimaiInfoReserve;
		$this->apiParas["paimai_info.reserve"] = $paimaiInfoReserve;
	}

	public function getPaimaiInfoReserve()
	{
		return $this->paimaiInfoReserve;
	}

	public function setPaimaiInfoValidHour($paimaiInfoValidHour)
	{
		$this->paimaiInfoValidHour = $paimaiInfoValidHour;
		$this->apiParas["paimai_info.valid_hour"] = $paimaiInfoValidHour;
	}

	public function getPaimaiInfoValidHour()
	{
		return $this->paimaiInfoValidHour;
	}

	public function setPaimaiInfoValidMinute($paimaiInfoValidMinute)
	{
		$this->paimaiInfoValidMinute = $paimaiInfoValidMinute;
		$this->apiParas["paimai_info.valid_minute"] = $paimaiInfoValidMinute;
	}

	public function getPaimaiInfoValidMinute()
	{
		return $this->paimaiInfoValidMinute;
	}

	public function setPicPath($picPath)
	{
		$this->picPath = $picPath;
		$this->apiParas["pic_path"] = $picPath;
	}

	public function getPicPath()
	{
		return $this->picPath;
	}

	public function setPostFee($postFee)
	{
		$this->postFee = $postFee;
		$this->apiParas["post_fee"] = $postFee;
	}

	public function getPostFee()
	{
		return $this->postFee;
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

	public function setPrice($price)
	{
		$this->price = $price;
		$this->apiParas["price"] = $price;
	}

	public function getPrice()
	{
		return $this->price;
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

	public function setPropertyAlias($propertyAlias)
	{
		$this->propertyAlias = $propertyAlias;
		$this->apiParas["property_alias"] = $propertyAlias;
	}

	public function getPropertyAlias()
	{
		return $this->propertyAlias;
	}

	public function setProps($props)
	{
		$this->props = $props;
		$this->apiParas["props"] = $props;
	}

	public function getProps()
	{
		return $this->props;
	}

	public function setQualification($qualification)
	{
		$this->qualification = $qualification;
		$this->apiParas["qualification"] = $qualification;
	}

	public function getQualification()
	{
		return $this->qualification;
	}

	public function setScenicTicketBookCost($scenicTicketBookCost)
	{
		$this->scenicTicketBookCost = $scenicTicketBookCost;
		$this->apiParas["scenic_ticket_book_cost"] = $scenicTicketBookCost;
	}

	public function getScenicTicketBookCost()
	{
		return $this->scenicTicketBookCost;
	}

	public function setScenicTicketPayWay($scenicTicketPayWay)
	{
		$this->scenicTicketPayWay = $scenicTicketPayWay;
		$this->apiParas["scenic_ticket_pay_way"] = $scenicTicketPayWay;
	}

	public function getScenicTicketPayWay()
	{
		return $this->scenicTicketPayWay;
	}

	public function setSellPoint($sellPoint)
	{
		$this->sellPoint = $sellPoint;
		$this->apiParas["sell_point"] = $sellPoint;
	}

	public function getSellPoint()
	{
		return $this->sellPoint;
	}

	public function setSellPromise($sellPromise)
	{
		$this->sellPromise = $sellPromise;
		$this->apiParas["sell_promise"] = $sellPromise;
	}

	public function getSellPromise()
	{
		return $this->sellPromise;
	}

	public function setSellerCids($sellerCids)
	{
		$this->sellerCids = $sellerCids;
		$this->apiParas["seller_cids"] = $sellerCids;
	}

	public function getSellerCids()
	{
		return $this->sellerCids;
	}

	public function setShape($shape)
	{
		$this->shape = $shape;
		$this->apiParas["shape"] = $shape;
	}

	public function getShape()
	{
		return $this->shape;
	}

	public function setSkuBarcode($skuBarcode)
	{
		$this->skuBarcode = $skuBarcode;
		$this->apiParas["sku_barcode"] = $skuBarcode;
	}

	public function getSkuBarcode()
	{
		return $this->skuBarcode;
	}

	public function setSkuDeliveryTimes($skuDeliveryTimes)
	{
		$this->skuDeliveryTimes = $skuDeliveryTimes;
		$this->apiParas["sku_delivery_times"] = $skuDeliveryTimes;
	}

	public function getSkuDeliveryTimes()
	{
		return $this->skuDeliveryTimes;
	}

	public function setSkuHdHeight($skuHdHeight)
	{
		$this->skuHdHeight = $skuHdHeight;
		$this->apiParas["sku_hd_height"] = $skuHdHeight;
	}

	public function getSkuHdHeight()
	{
		return $this->skuHdHeight;
	}

	public function setSkuHdLampQuantity($skuHdLampQuantity)
	{
		$this->skuHdLampQuantity = $skuHdLampQuantity;
		$this->apiParas["sku_hd_lamp_quantity"] = $skuHdLampQuantity;
	}

	public function getSkuHdLampQuantity()
	{
		return $this->skuHdLampQuantity;
	}

	public function setSkuHdLength($skuHdLength)
	{
		$this->skuHdLength = $skuHdLength;
		$this->apiParas["sku_hd_length"] = $skuHdLength;
	}

	public function getSkuHdLength()
	{
		return $this->skuHdLength;
	}

	public function setSkuOuterIds($skuOuterIds)
	{
		$this->skuOuterIds = $skuOuterIds;
		$this->apiParas["sku_outer_ids"] = $skuOuterIds;
	}

	public function getSkuOuterIds()
	{
		return $this->skuOuterIds;
	}

	public function setSkuPrices($skuPrices)
	{
		$this->skuPrices = $skuPrices;
		$this->apiParas["sku_prices"] = $skuPrices;
	}

	public function getSkuPrices()
	{
		return $this->skuPrices;
	}

	public function setSkuProperties($skuProperties)
	{
		$this->skuProperties = $skuProperties;
		$this->apiParas["sku_properties"] = $skuProperties;
	}

	public function getSkuProperties()
	{
		return $this->skuProperties;
	}

	public function setSkuQuantities($skuQuantities)
	{
		$this->skuQuantities = $skuQuantities;
		$this->apiParas["sku_quantities"] = $skuQuantities;
	}

	public function getSkuQuantities()
	{
		return $this->skuQuantities;
	}

	public function setSkuSpecIds($skuSpecIds)
	{
		$this->skuSpecIds = $skuSpecIds;
		$this->apiParas["sku_spec_ids"] = $skuSpecIds;
	}

	public function getSkuSpecIds()
	{
		return $this->skuSpecIds;
	}

	public function setSpuConfirm($spuConfirm)
	{
		$this->spuConfirm = $spuConfirm;
		$this->apiParas["spu_confirm"] = $spuConfirm;
	}

	public function getSpuConfirm()
	{
		return $this->spuConfirm;
	}

	public function setStuffStatus($stuffStatus)
	{
		$this->stuffStatus = $stuffStatus;
		$this->apiParas["stuff_status"] = $stuffStatus;
	}

	public function getStuffStatus()
	{
		return $this->stuffStatus;
	}

	public function setSubStock($subStock)
	{
		$this->subStock = $subStock;
		$this->apiParas["sub_stock"] = $subStock;
	}

	public function getSubStock()
	{
		return $this->subStock;
	}

	public function setSupportCustomMade($supportCustomMade)
	{
		$this->supportCustomMade = $supportCustomMade;
		$this->apiParas["support_custom_made"] = $supportCustomMade;
	}

	public function getSupportCustomMade()
	{
		return $this->supportCustomMade;
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

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setValidThru($validThru)
	{
		$this->validThru = $validThru;
		$this->apiParas["valid_thru"] = $validThru;
	}

	public function getValidThru()
	{
		return $this->validThru;
	}

	public function setWeight($weight)
	{
		$this->weight = $weight;
		$this->apiParas["weight"] = $weight;
	}

	public function getWeight()
	{
		return $this->weight;
	}

	public function setWirelessDesc($wirelessDesc)
	{
		$this->wirelessDesc = $wirelessDesc;
		$this->apiParas["wireless_desc"] = $wirelessDesc;
	}

	public function getWirelessDesc()
	{
		return $this->wirelessDesc;
	}

	public function getApiMethodName()
	{
		return "taobao.item.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cid,"cid");
		RequestCheckUtil::checkMinValue($this->cid,0,"cid");
		RequestCheckUtil::checkNotNull($this->desc,"desc");
		RequestCheckUtil::checkMaxLength($this->desc,200000,"desc");
		RequestCheckUtil::checkMaxLength($this->features,4000,"features");
		RequestCheckUtil::checkMaxLength($this->globalStockCountry,30,"globalStockCountry");
		RequestCheckUtil::checkNotNull($this->locationCity,"locationCity");
		RequestCheckUtil::checkNotNull($this->locationState,"locationState");
		RequestCheckUtil::checkNotNull($this->num,"num");
		RequestCheckUtil::checkMaxValue($this->num,900000000,"num");
		RequestCheckUtil::checkMinValue($this->num,0,"num");
		RequestCheckUtil::checkMaxValue($this->paimaiInfoInterval,60,"paimaiInfoInterval");
		RequestCheckUtil::checkMinValue($this->paimaiInfoInterval,1,"paimaiInfoInterval");
		RequestCheckUtil::checkMaxValue($this->paimaiInfoMode,3,"paimaiInfoMode");
		RequestCheckUtil::checkMinValue($this->paimaiInfoMode,1,"paimaiInfoMode");
		RequestCheckUtil::checkMaxValue($this->paimaiInfoValidHour,48,"paimaiInfoValidHour");
		RequestCheckUtil::checkMinValue($this->paimaiInfoValidHour,1,"paimaiInfoValidHour");
		RequestCheckUtil::checkMaxValue($this->paimaiInfoValidMinute,59,"paimaiInfoValidMinute");
		RequestCheckUtil::checkMinValue($this->paimaiInfoValidMinute,0,"paimaiInfoValidMinute");
		RequestCheckUtil::checkMaxLength($this->propertyAlias,800,"propertyAlias");
		RequestCheckUtil::checkMaxLength($this->sellPoint,150,"sellPoint");
		RequestCheckUtil::checkMaxListSize($this->sellerCids,10,"sellerCids");
		RequestCheckUtil::checkNotNull($this->stuffStatus,"stuffStatus");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkMaxLength($this->title,120,"title");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
