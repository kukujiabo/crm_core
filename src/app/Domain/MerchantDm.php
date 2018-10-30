<?php
namespace App\Domain;

use App\Service\Merchant\MerchantSv;
use App\Service\Merchant\ShopSv;

/**
 * 品牌处理域
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class MerchantDm {

  protected $_msv;

  public function __construct() {
  
    $this->_msv = new MerchantSv(); 
  
  }

  /**
   * 添加品牌
   */
  public function create($data) {
  
    return $this->_msv->create($data);
  
  }

  /**
   * 更新品牌
   */
  public function edit($data) {

    $id = $data['id'];

    unset($data['id']);
  
    return $this->_msv->edit($id, $data);
  
  }

  /**
   * 查询品牌列表
   */
  public function listQuery($data) {
  
    return $this->_msv->listQuery($data); 

  }

  /**
   * 查询全部品牌啊
   */
  public function getAll($data) {

    $order = $data['order'];

    $fields = $data['fields'];

    $query = [];

    if ($data['ext_1']) {

      $query['ext_1'] = $data['ext_1'];

    }
    if ($data['mname']) {

      $query['mname'] = $data['mname'];

    }
    if ($data['status']) {

      $query['status'] = $data['status'];

    }

    return $this->_msv->getAll($query, $order, $fields);
  
  }

  /**
   * 查询详情接口
   */
  public function getDetail($params) {
  
    return $this->_msv->getDetail($params['id']);
  
  }


}
