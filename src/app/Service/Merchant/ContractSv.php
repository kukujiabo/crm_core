<?php
namespace App\Service\Merchant;

use App\Service\BaseService;
use Core\Service\CurdSv;

class ContractSv extends BaseService {

	use CurdSv;
	
	public function create($data) {

		$newData = [

			'mid' => $data['mid'],

			'type' => $data['type'],

			'title' => $data['title'],

			'code' => $data['code'],

			'brief' => $data['brief'],

			'created_at' => date('Y-m-d H:i:s')

		];

		$msv = new MerchantSv();

		$this->update($data['mid'], [ 'type' => $data['type'] ]);

		return $this->add($newData);

	}


	public function listQuery($data) {

		$query = [];

		$or = '';

		if ($data['keywords']) {

			$keywords = $data['keywords'];

			$or = " title like '%{$keywords}%' or code like '%{$keywords}%' or mname like '%{$keywords}%' or brief like '%{$keywords}%' ";

		}

		$csv = new VContractInfoSv();

		return $csv->queryList($query, $data['fields'], $data['order'], $data['page'], $data['page_size'], $or);

	}

}