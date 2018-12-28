<?php
namespace App\Domain;

use App\Service\Merchant\MerchantSv;
use App\Service\Merchant\ShopSv;
use App\Service\Merchant\SalesChangeSv;

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
  
    $mid = $this->_msv->create($data);

    $svSv = new SalesChangeSv();

    $svSv->add([ 'mid' => $mid, 'sales_id' => $data['sales_id'], 'created_at' => date('Y-m-d H:i:s') ]);

    return $mid;
  
  }

  /**
   * 更新品牌
   */
  public function edit($data) {

    $id = $data['id'];

    unset($data['id']);

    if ($data['sales_id']) {

      $svSv = new SalesChangeSv();

      $svSv->add([ 'mid' => $id, 'sales_id' => $data['sales_id'], 'created_at' => date('Y-m-d H:i:s') ]);

    }
  
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

    return $this->_msv->getAll($data, $order, $fields);
  
  }

  /**
   * 查询详情接口
   */
  public function getDetail($params) {
  
    return $this->_msv->getDetail($params['id']);
  
  }

  public function batchSetSales($params) {

    $condition = [ 'id' => $params['mids'] ];

    return $this->_msv->batchUpdate($condition, [ 'sales_id' => $params['sales_id'] ]);

  }


  public function remove($params) {
  
    return $this->_msv->remove($params['id']); 
  
  }

}
