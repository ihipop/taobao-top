<?php
/**
 * TOP API: taobao.jushita.jms.user.add request
 * 
 * @author auto create
 * @since 1.0, 2016.01.29
 */
class JushitaJmsUserAddRequest
{
	/** 
	 * topic列表,不填则继承appkey所订阅的topic
	 **/
	private $topicNames;
	
	private $apiParas = array();
	
	public function setTopicNames($topicNames)
	{
		$this->topicNames = $topicNames;
		$this->apiParas["topic_names"] = $topicNames;
	}

	public function getTopicNames()
	{
		return $this->topicNames;
	}

	public function getApiMethodName()
	{
		return "taobao.jushita.jms.user.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->topicNames,20,"topicNames");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
