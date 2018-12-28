<?php
namespace App\Domain;

use \App\Service\Merchant\TrackSv;

class TrackDm {

  protected $_merchant;

  public function __construct() {
  
    $this->_tksv = new TrackSv();


  }

	public function create($data) {

		return $this->_tksv->create($data);

	}	

	public function listQuery($data) {

		return $this->_tksv->listQuery($data);

	}

	public function getDetail($data) {

		return $this->_tksv->getDetail($data);

	}

	public function edit($data) {

		return $this->_tksv->edit($data);

	}

	public function getAll($data) {

		return $this->_tksv->getAll($data);

	}

}