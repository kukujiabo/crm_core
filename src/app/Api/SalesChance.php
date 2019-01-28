<?php
namespace App\Api;

/**
 * 销售机会接口
 *
 *
 */
class SalesChance extends BaseApi {
	
	public function getRules() {

		return $this->rules([

			'create' => [

				'chance_name' => 'chance_name|string|true||机会名称',
				'price' => 'price|float|true||预估价格',
				'customer_name' => 'customer_name|string|true||客户名称',
				'customer_id' => 'customer_id|int|true||客户id',
				'contact_type' => 'contact_type|int|true||联系类型',
				'deal_date' => 'deal_date|string|true||预计成交时间',
				'type' => 'type|int|true||类型',
				'next_step' => 'next_step|string|true||下一步',
				'source' => 'source|int|true||来源',
				'stage' => 'stage|int|true||阶段',
				'sales_id' => 'sales_id|int|true||销售id',
				'posibility' => 'posibility|int|true||可能性',
				'description' => 'description|string|false||描述',
				'sales_name' => 'sales_name|string|true||销售名称',
				'state' => 'state|int|true||状态'

			],

			'getList' => [

				'chance_name' => 'chance_name|string|false||机会名称',
				'customer_id' => 'customer_id|int|false||客户id',
				'type' => 'type|int|false||类型',
				'source' => 'source|int|false||来源',
				'stage' => 'stage|int|false||阶段',
				'sales_id' => 'sales_id|int|false||销售id',
				'posibility' => 'posibility|int|false||可能性',
				'sales_name' => 'sales_name|string|false||销售名称',
				'state' => 'state|int|false||状态',
				'page' => 'page|int|false|1|页码',
				'page_size' => 'page_size|int|false|20|页码'

			],

			'edit' => [

				'id' => 'id|int|true||机会id',
				'chance_name' => 'chance_name|string|false||机会名称',
				'price' => 'price|float|false||预估价格',
				'customer_name' => 'customer_name|string|false||客户名称',
				'customer_id' => 'customer_id|int|false||客户id',
				'deal_date' => 'deal_date|string|false||预计成交时间',
				'contact_type' => 'contact_type|int|false||联系类型',
				'type' => 'type|int|false||类型',
				'next_step' => 'next_step|string|false||下一步',
				'source' => 'source|int|false||来源',
				'stage' => 'stage|int|false||阶段',
				'sales_id' => 'sales_id|int|false||销售id',
				'posibility' => 'posibility|int|false||可能性',
				'description' => 'description|string|false||描述',
				'sales_name' => 'sales_name|string|false||销售名称',
				'state' => 'state|int|false||状态'

			],

			'getAll' => [

				'chance_name' => 'chance_name|string|false||机会名称',
				'customer_id' => 'customer_id|int|false||客户id',
				'type' => 'type|int|false||类型',
				'source' => 'source|int|false||来源',
				'stage' => 'stage|int|false||阶段',
				'sales_id' => 'sales_id|int|false||销售id',
				'posibility' => 'posibility|int|false||可能性',
				'sales_name' => 'sales_name|string|false||销售名称',
				'state' => 'state|int|false||状态'

			],

			'getDetail' => [

				'id' => 'id|int|true||id'

			]

		]);

	}

	/**
	 * 添加销售机会
	 * @desc 添加销售机会
	 *
	 * @return int id
	 */
	public function create() {

		return $this->dm->create($this->retriveRuleParams(__FUNCTION__));

	}

	/**
	 * 销售机会列表
	 * @desc 销售机会列表
	 *
	 * @return array list
	 */
	public function getList() {

		return $this->dm->getList($this->retriveRuleParams(__FUNCTION__));
	
	}

	/**
	 * 编辑销售机会
	 * @desc 编辑销售机会
	 *
	 * @return int num
	 */
	public function edit() {

		return $this->dm->edit($this->retriveRuleParams(__FUNCTION__));

	}

	/**
	 * 查询全部销售机会
	 * @desc 查询全部销售机会
	 *
	 * @return array data
	 */
	public function getAll() {

		return $this->dm->getAll($this->retriveRuleParams(__FUNCTION__));

	}

	/**
	 * 查询销售机会详情
	 * @desc 查询全部销售机会
	 *
	 * @return array data
	 */
	public function getDetail() {

		return $this->dm->getDetail($this->retriveRuleParams(__FUNCTION__));

	}


}