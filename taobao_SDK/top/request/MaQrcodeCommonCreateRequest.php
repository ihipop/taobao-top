<?php
/**
 * TOP API: taobao.ma.qrcode.common.create request
 * 
 * @author auto create
 * @since 1.0, 2015.04.23
 */
class MaQrcodeCommonCreateRequest
{
	/** 
	 * 二维码需要布点的位置，方便用户在码平台上可以区分看到不同布点的扫码数据情况；列表值，用半角','号分割，单个渠道名不能超过16字符。
	 **/
	private $channelName;
	
	/** 
	 * 二维码的内容之一，由type决定：type=page时，content传入无线页面的URL连接内容；type=item时，content传入宝贝数字ID；type=url时，content传入普通的URL连接内容；type=shop时，content传入店铺ID；
	 **/
	private $content;
	
	/** 
	 * 二维码的logo地址，只允许淘宝官方图片空间的图片地址，其他非图片空间图片不支持。官方淘logo图片地址：http://img01.taobaocdn.com/imgextra/T1Od8YFT8eXXXXXXXX。
	 **/
	private $logo;
	
	/** 
	 * 二维码名字，即创建的二维码，在码平台上显示记录的名字。
	 **/
	private $name;
	
	/** 
	 * 是否需要矢量图，如果需要矢量图，设置为true；只支持普通二维码，官方模板不支持矢量图
	 **/
	private $needEps;
	
	/** 
	 * 二维码尺寸，只支持普通二维码，不支持官方模板，单位为像素，最小为60×60，最大为300×300，建议175×175。官方模板大小尺寸见style说明。
	 **/
	private $size;
	
	/** 
	 * 二维码的样式名，支持普通码的颜色或官方模板的模板名；普通码的颜色可选输入：“000000”(黑色)、“EF4F2B”(橙色);官方模板的可选输入（实际尺寸比样例大）：“ww_color.png“ 尺寸290x320，样例：http://gtms03.alicdn.com/tps/i3/T1YLPRFRXXXXbsbYwb-100-102.png；“tb_scan.png“ 尺寸290x320，样例：http://gtms01.alicdn.com/tps/i1/T14vsEFThdXXbsbYwb-100-102.png；“ww_hide_color.png“  尺寸200x263，样例：http://gtms04.alicdn.com/tps/i4/TB1URvlFVXXXXbRXFXXwxcf6pXX-76-100.png；“tmall_hide_color.png“ 尺寸200x263，样例：http://gtms01.alicdn.com/tps/i1/TB1S5PiFVXXXXacXVXXwxcf6pXX-76-100.png。
	 **/
	private $style;
	
	/** 
	 * 要制作的二维码业务类型：page:无线页面类型item:宝贝ID类型url:普通的URL连接类型shop:店铺ID类型
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setChannelName($channelName)
	{
		$this->channelName = $channelName;
		$this->apiParas["channel_name"] = $channelName;
	}

	public function getChannelName()
	{
		return $this->channelName;
	}

	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setLogo($logo)
	{
		$this->logo = $logo;
		$this->apiParas["logo"] = $logo;
	}

	public function getLogo()
	{
		return $this->logo;
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

	public function setNeedEps($needEps)
	{
		$this->needEps = $needEps;
		$this->apiParas["need_eps"] = $needEps;
	}

	public function getNeedEps()
	{
		return $this->needEps;
	}

	public function setSize($size)
	{
		$this->size = $size;
		$this->apiParas["size"] = $size;
	}

	public function getSize()
	{
		return $this->size;
	}

	public function setStyle($style)
	{
		$this->style = $style;
		$this->apiParas["style"] = $style;
	}

	public function getStyle()
	{
		return $this->style;
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

	public function getApiMethodName()
	{
		return "taobao.ma.qrcode.common.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->channelName,160,"channelName");
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkMaxLength($this->content,256,"content");
		RequestCheckUtil::checkMaxLength($this->logo,256,"logo");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxLength($this->name,32,"name");
		RequestCheckUtil::checkNotNull($this->size,"size");
		RequestCheckUtil::checkMaxValue($this->size,300,"size");
		RequestCheckUtil::checkMinValue($this->size,60,"size");
		RequestCheckUtil::checkNotNull($this->style,"style");
		RequestCheckUtil::checkMaxLength($this->style,50,"style");
		RequestCheckUtil::checkNotNull($this->type,"type");
		RequestCheckUtil::checkMaxLength($this->type,10,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
