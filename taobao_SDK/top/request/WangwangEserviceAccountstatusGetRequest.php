<?php
/**
 * TOP API: taobao.wangwang.eservice.accountstatus.get request
 * 
 * @author auto create
 * @since 1.0, 2014.07.02
 */
class WangwangEserviceAccountstatusGetRequest
{
	/** 
	 * 的起始时间。</br>
格式为： YYYY-mm-dd_HH:MM:SS </br>
注：</br>
1. 查询时间必须在30天之内。
2. 起始时间和结束时间间隔不超过7天。
	 **/
	private $btime;
	
	/** 
	 * 结束时间 。 </br>
格式为：YYYY-mm-dd_HH:MM:SS </br>
注：</br>
1. 查询时间必须在30天之内。
2. 起始时间和结束时间间隔不超过7天。
	 **/
	private $etime;
	
	/** 
	 * 查询账号（序列）。 需要带前缀（如cntaobao）。</br>

注： </br>
1. uid中所有账号必须为授权店铺的店铺内账号。</br>
2. 如果传入多个账号，账号与账号之间以","分割。最多30个账号。每个账号的最大长度是64。</br>
3. 由于后端依然是顺序请求，所以该接口的响应时长是会随uid的数量线性增长，即uid数量越多，调用时间越长。请合理使用
	 **/
	private $uid;
	
	private $apiParas = array();
	
	public function setBtime($btime)
	{
		$this->btime = $btime;
		$this->apiParas["btime"] = $btime;
	}

	public function getBtime()
	{
		return $this->btime;
	}

	public function setEtime($etime)
	{
		$this->etime = $etime;
		$this->apiParas["etime"] = $etime;
	}

	public function getEtime()
	{
		return $this->etime;
	}

	public function setUid($uid)
	{
		$this->uid = $uid;
		$this->apiParas["uid"] = $uid;
	}

	public function getUid()
	{
		return $this->uid;
	}

	public function getApiMethodName()
	{
		return "taobao.wangwang.eservice.accountstatus.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->btime,"btime");
		RequestCheckUtil::checkMaxLength($this->btime,19,"btime");
		RequestCheckUtil::checkNotNull($this->etime,"etime");
		RequestCheckUtil::checkMaxLength($this->etime,19,"etime");
		RequestCheckUtil::checkNotNull($this->uid,"uid");
		RequestCheckUtil::checkMaxListSize($this->uid,30,"uid");
		RequestCheckUtil::checkMaxLength($this->uid,1920,"uid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
