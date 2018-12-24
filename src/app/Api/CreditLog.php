<?php
namespace App\Api;

/**
 * 额度记录接口
 *
 */
class CreditLog extends BaseApi {
	
	public function getRules() {

		return $this->rules([

			'getList' => [

				'order_sn' => 'order_sn|string|false||订单号',

				'order' => 'order|string|false||排序',

				'manager_id' => 'manager_id|int|false||经理id',

				'page' => 'page|int|false||页码',

				'page_size' => 'page_size|int|false||每页条数'  

			]

		]);

	}

	/**
	 * 查询额度记录列表
	 * @desc 查询额度记录列表
	 *
	 * @return array list
	 */
	public function getList() {

		return $this->dm->getList($this->retriveRuleParams(__FUNCTION__));

	}


}