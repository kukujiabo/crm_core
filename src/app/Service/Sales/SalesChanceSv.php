<?php
namespace App\Service\Sales;

use App\Service\BaseService;
use Core\Service\CurdSv;
use App\Service\Merchant\SalesBindSv;

class SalesChanceSv extends BaseService {
	
	use CurdSv;

	public function create($data) {

		$newData = [

			'chance_name' => $data['chance_name'],
			'price' => $data['price'],
			'customer_name' => $data['customer_name'],
			'customer_id' => $data['customer_id'],
			'deal_date' => $data['deal_date'],
			'type' => $data['type'],
			'next_step' => $data['next_step'],
			'source' => $data['source'],
			'stage' => $data['stage'],
			'sales_id' => $data['sales_id'],
			'posibility' => $data['posibility'],
			'description' => $data['description'],
			'sales_name' => $data['sales_name'],
			'state' => $data['state'],
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')

		];

		return $this->add($newData);

	} 

	public function getList($data) {

		$query = [];

		if ($data['chance_name']) {

			$query['chance_name'] = $data['chance_name'];

		}
		if ($data['customer_id']) {

			$query['customer_id'] = $data['customer_id'];

		}
		if ($data['type']) {

			$query['type'] = $data['type'];

		}
		if ($data['stage']) {

			$query['stage'] = $data['stage'];

		}
		if ($data['sales_id']) {

			$query['sales_id'] = $data['sales_id'];
			
		}
		if ($data['posibility']) {

			$query['posibility'] = $data['posibility'];
			
		}
		if ($data['source']) {

			$query['source'] = $data['source'];
			
		}
		if ($data['state']) {

			$query['state'] = $data['state'];
			
		}

		return $this->queryList($query, $data['fields'], $data['order'], $data['page'], $data['page_size']);

	}

	public function edit($data) {

		$id = $data['id'];

		$updateData = [];

		if ($data['chance_name']) {

			$updateData['chance_name'] = $data['chance_name'];

		}
		if ($data['customer_id']) {

			$updateData['customer_id'] = $data['customer_id'];

		}
		if ($data['type']) {

			$updateData['type'] = $data['type'];

		}
		if ($data['stage']) {

			$updateData['stage'] = $data['stage'];

		}
		if ($data['sales_id']) {

			$sbsv = new SalesBindSv();

			$sale = $sbsv->findOne($data['sales_id']);

			$updateData['sales_id'] = $data['sales_id'];

			$updateData['sales_name'] = $sale['real_name'];
			
		}
		if ($data['posibility']) {

			$updateData['posibility'] = $data['posibility'];
			
		}
		if ($data['source']) {

			$updateData['source'] = $data['source'];
			
		}
		if ($data['state']) {

			$updateData['state'] = $data['state'];
			
		}
		if ($data['price']) {

			$updateData['price'] = $data['price'];

		}

		$updateData['updated_at'] = date('Y-m-d H:i:s');

		return $this->update($id, $updateData);

	}

	public function getAll($data) {

		$query = [];

		if ($data['chance_name']) {

			$query['chance_name'] = $data['chance_name'];

		}
		if ($data['customer_id']) {

			$query['customer_id'] = $data['customer_id'];

		}
		if ($data['type']) {

			$query['type'] = $data['type'];

		}
		if ($data['stage']) {

			$query['stage'] = $data['stage'];

		}
		if ($data['sales_id']) {

			$query['sales_id'] = $data['sales_id'];
			
		}
		if ($data['posibility']) {

			$query['posibility'] = $data['posibility'];
			
		}
		if ($data['source']) {

			$query['source'] = $data['source'];
			
		}
		if ($data['state']) {

			$query['state'] = $data['state'];
			
		}

		return $this->all($query);
		
	}

}