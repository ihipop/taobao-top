<?php

/**
 * 订单状态回传请求数据
 * @author auto create
 */
class WlbWmsOrderStatusUpload
{
	
	/** 
	 * 操作内容：物流详情显示
	 **/
	public $content;
	
	/** 
	 * 扩展属性
	 **/
	public $features;
	
	/** 
	 * 操作时间
	 **/
	public $operate_date;
	
	/** 
	 * 操作人
	 **/
	public $operator;
	
	/** 
	 * 操作人联系方式
	 **/
	public $operator_contact;
	
	/** 
	 * 仓库订单编码
	 **/
	public $order_code;
	
	/** 
	 * 仓库订单类型：201 交易出库单（销售出库） 502 换货出库单 503 补发出库单 302 调拨入库单 501退货入库单 （销退入库单 ） 504换货入库 601 采购入库单 901 退供出库单 301 调拨出库单
	 **/
	public $order_type;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * 单据状态（WMS_ACCEPT 接单成功，WMS_REJECT 接单失败，WMS_CONFIRMED 仓库生产完成, WMS_CANCEL 取消仓库发货，WMS_ ARRIVALREGISTER 到货登记, WMS_ONSALE 上架完成,WMS_RECEIVED 收货完成, WMS_PICKED 拣货完成, WMS_CHECKED 复核完成, WMS_PACKAGED 打包完成,TMS_SIGN 买家签收，TMS_REJECT 买家拒签）
	 **/
	public $status;
	
	/** 
	 * 仓库订单编码
	 **/
	public $store_order_code;	
}
?>