<?php
namespace App\Domain;

use \App\Service\Merchant\ContractSv;

class ContractDm {

  protected $_contractSv;

  public function __construct() {
  
    $this->_contractSv = new ContractSv();
  
  }

	
	public function create($data) {

		return $this->_contractSv->create($data);

	}	

	public function listQuery($data) {

		return $this->_contractSv->listQuery($data);

	}

}