<?php
namespace App\Domain;

use App\Service\Sales\SalesChanceSv;

class SalesChanceDm {
	
	 protected $_scsv;

  public function __construct() {
  
    $this->_scsv = new SalesChanceSv();
  
  }

  public function create($data) {

  	return $this->_scsv->create($data);

  }

  public function getList($data) {

  	return $this->_scsv->getList($data);

  }

  public function edit($data) {

  	return $this->_scsv->edit($data);

  }

  public function getAll($data) {

    return $this->_scsv->getAll($data);

  }

}