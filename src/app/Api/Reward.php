<?php
namespace App\Api;

/**
 * D-1 赠品接口
 *
 * @author Meroc Chen <398515393@qq.com> 2018-06-03
 */
class Reward extends BaseApi {

  public function getRules() {
  
    return $this->rules([

      'create' => [
      
        'mid' => 'mid|int|true||品牌id',
        'reward_name' => 'reward_name|string|true||赠品名称',
        'brief' => 'brief|string|true||赠品简介',
        'status' => 'status|int|false||状态',
        'start_time' => 'start_time|string|false||赠品有效期开始'
      
      ],

      'edit' => [
      
        'id' => 'id|string|true||赠品id',
        'mid' => 'mid|int|true||品牌id',
        'reward_name' => 'reward_name|string|true||赠品名称',
        'brief' => 'brief|string|true||赠品简介',
        'status' => 'status|int|false||状态',
        'start_time' => 'start_time|string|false||赠品有效期开始'

      ],


      'listQuery' => [
      
        'keywords' => 'keywords|string|false||赠品名称',
        'fields' => 'fields|string|false||查询字段',
        'order' => 'order|string|false||排序',
        'page' => 'page|int|false||页码',
        'page_size' => 'page_size|int|false||每页条数'
      
      ],

      'getDetail' => [
      
        'id' => 'id|int|true||赠品id'
      
      ]
    
    ]);
  
  }

  /**
   * 新建赠品
   * @desc 新建赠品
   *
   * @return int id
   */
  public function create() {
  
    return $this->dm->create($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 更新赠品信息
   * @desc 更新赠品信息
   *
   * @return int num
   */
  public function edit() {
  
    return $this->dm->edit($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询列表
   * @desc 查询列表
   *
   * @return array list
   */
  public function listQuery() {
  
    return $this->dm->listQuery($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询详情
   * @desc 查询详情
   *
   * @return array data
   */
  public function getDetail() {
  
    return $this->dm->getDetail($this->retriveRuleParams(__FUNCTION__));
  
  }


}
