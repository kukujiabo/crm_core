<?php
namespace App\Service\Merchant;

use App\Service\BaseService;
use Core\Service\CurdSv;

class TrackSv extends BaseService {

	use CurdSv;

	public function create($data) {

		$newData = [

			'mid' => $data['mid'],

			'next_view_date' => $data['next_view_date'],

			'stage' => $data['stage'],

			'state' => $data['state'],

			'type' => $data['type'],

			'chance_id' => $data['chance_id'],

			'posibility' => $data['posibility'],

			'content' => $data['content'],

			'contact_type' => $data['contact_type'],

			'created_at' => date('Y-m-d H:i:s')

		];

		return $this->add($newData);

	}

	public function listQuery($data) {

		$query = [];

		if ($data['mid']) {

			$query['mid'] = $data['mid'];

		}
		if ($data['sales_id']) {

			$query['sales_id'] = $data['sales_id'];

		}
		if ($data['stage']) {

			$query['stage'] = $data['stage'];

		}
		if ($data['state']) {

			$query['state'] = $data['state'];

		}
		if ($data['type']) {

			$query['type'] = $data['type'];

		}
		if ($data['chance_id']) {

			$query['chance_id'] = $data['chance_id'];

		}
		if ($data['contact_type']) {

			$query['contact_type'] = $data['contact_type'];

		}

		$vtsv = new VTrackInfoSv();

		return $vtsv->queryList($query, $data['fields'], $data['order'], $data['page'], $data['page_size']);

	}

	public function getDetail($data) {

		return $this->findOne($data['id']);

	}

	public function edit($data) {

		$id = $data['id'];

		$updateData = [];

		if (isset($data['mid'])) {

			$updateData['mid'] = $data['mid'];

		}
		if (isset($data['next_view_date'])) {

			$updateData['next_view_date'] = $data['next_view_date'];

		}
		if (isset($data['content'])) {

			$updateData['content'] = $data['content'];

		}
		if (isset($data['stage'])) {

			$updateData['stage'] = $data['stage'];

		}
		if (isset($data['chance_id'])) {

			$updateData['chance_id'] = $data['chance_id'];

		}
		if (isset($data['type'])) {

			$updateData['type'] = $data['type'];

		}
		if (isset($data['state'])) {

			$updateData['state'] = $data['state'];

		}
		if (isset($data['posibility'])) {

			$updateData['posibility'] = $data['posibility'];

		}
		if (isset($data['contact_type'])) {

			$updateData['contact_type'] = $data['contact_type'];

		}

		return $this->update($id, $updateData);

	}

	public function getAll($data) {

		$query = [];

		if ($data['mid']) {

			$query['mid'] = $data['mid'];

		}
		if ($data['sales_id']) {

			$query['sales_id'] = $data['sales_id'];

		}
		if ($data['stage']) {

			$query['stage'] = $data['stage'];

		}
		if ($data['state']) {

			$query['state'] = $data['state'];

		}
		if ($data['type']) {

			$query['type'] = $data['type'];

		}
		if ($data['chance_id']) {

			$query['chance_id'] = $data['chance_id'];

		}
		if ($data['contact_type']) {

			$query['contact_type'] = $data['contact_type'];

		}

		$vtsv = new VTrackInfoSv();

		return $vtsv->all($query);

	}

}