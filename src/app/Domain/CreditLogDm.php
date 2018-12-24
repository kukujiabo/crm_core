<?php
namespace App\Domain;

use App\Service\Merchant\CreditLogSv;

class CreditLogDm {

  protected $_csv;

  public function __construct() {
  
    $this->_csv = new CreditSv();
  
  }
	
	public function getList($data) {

		return $this->_csv->getList($data);

	}

}