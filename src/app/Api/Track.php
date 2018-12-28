<?php
namespace App\Api;

/**
 * 客户跟踪接口
 *
 */
class Track extends BaseApi {
	
	public function getRules() {

		return $this->rules([

			'create' => [

				'mid' => 'mid|int|true||商户id',
				'next_view_date' => 'next_view_date|string|true||预估时间',
				'stage' => 'stage|int|true||阶段',
				'state' => 'state|int|true||状态',
				'posibility' => 'posibility|int|true||可能性',
				'contact_type' => 'contact_type|int|true||联系类型',
				'content' => 'content|string|false||跟踪内容',
				'chance_id' => 'chance_id|int|true||销售机会id',
				'type' => 'type|int|true||类型'

			],
 
			'listQuery' => [

				'mid' => 'mid|int|false||商户id',
				'next_view_date' => 'next_view_date|string|false||预估时间',
				'stage' => 'stage|int|false||阶段',
				'state' => 'state|int|false||状态',
				'posibility' => 'posibility|int|false||可能性',
				'contact_type' => 'contact_type|int|false||联系类型',
				'content' => 'content|string|false||跟踪内容',
				'chance_id' => 'chance_id|int|false||销售机会id',
				'type' => 'type|int|false||类型',
				'sales_id' => 'sales_id|int|false||销售id',
				'fields' => 'fields|string|false||字段',
				'order' => 'order|string|false||排序',
				'page' => 'page|int|false||页码',
				'page_size' => 'page_size|int|false||每页条数'

			],

			'getDetail' => [

				'id' => 'id|int|true||跟踪id'

			],

			'edit' => [

				'id' => 'id|int|true||id',
				'mid' => 'mid|int|false||商户id',
				'next_view_date' => 'next_view_date|string|false||预估时间',
				'stage' => 'stage|int|false||阶段',
				'state' => 'state|int|false||状态',
				'posibility' => 'posibility|int|false||可能性',
				'contact_type' => 'contact_type|int|false||联系类型',
				'content' => 'content|string|false||跟踪内容',
				'chance_id' => 'chance_id|int|false||销售机会id',
				'type' => 'type|int|false||类型'

			],

			'getAll' => [

				'mid' => 'mid|int|false||商户id',
				'next_view_date' => 'next_view_date|string|false||预估时间',
				'stage' => 'stage|int|false||阶段',
				'state' => 'state|int|false||状态',
				'posibility' => 'posibility|int|false||可能性',
				'contact_type' => 'contact_type|int|false||联系类型',
				'content' => 'content|string|false||跟踪内容',
				'chance_id' => 'chance_id|int|false||销售机会id',
				'type' => 'type|int|false||类型'

			]

		]);

	}

	/**
	 * 新增跟踪记录
	 * @desc 新增跟踪记录
	 *
	 * @return int id
	 */
	public function create() {

		return $this->dm->create($this->retriveRuleParams(__FUNCTION__));

	}

	/**
	 * 查询记录列表
	 * @desc 查询记录列表
	 *
	 * @return array list
	 */
	public function listQuery() {

		return $this->dm->listQuery($this->retriveRuleParams(__FUNCTION__));

	}

	/**
	 * 查询记录详情
	 * @desc 查询记录详情
	 *
	 * @return array data
	 */
	public function getDetail() {

		return $this->dm->getDetail($this->retriveRuleParams(__FUNCTION__));

	}

	/**
	 * 编辑记录
	 * @desc 编辑记录
	 *
	 * @return array data
	 */
	public function edit() {

		return $this->dm->edit($this->retriveRuleParams(__FUNCTION__));

	}

	/**
	 * 查询全部
	 * @desc 查询全部
	 *
	 * @return array data
	 */
	public function getAll() {

		return $this->dm->getAll($this->retriveRuleParams(__FUNCTION__));

	}

}