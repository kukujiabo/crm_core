<?php
namespace App\Service\Merchant;

use App\Service\BaseService;
use Core\service\CurdSv;

/**
 * 
 *
 */
class CreditSv extends BaseService {
	
	use CurdSv;

	public function create($data) {

		$newCredit = [

			'manager_id' => $data['mid'],
			'credit' => $data['credit'],
			'rest' => $data['credit'],
			'start_date' => $data['start_date'],
			'end_date' => $data['end_date'],
			'created_at' => date('Y-m-d H:i:s')

		];

		return $this->add($newCredit);

	}

	public function listQuery($data) {

		$query = [];

		if ($data['maid']) {

			$query['manager_id'] = $data['maid'];

		}

		$vcsv = new VCreditInfoSv();

		return $vcsv->queryList($query, $data['fields'], $data['order'], $data['page'], $data['page_size']);

	}

}