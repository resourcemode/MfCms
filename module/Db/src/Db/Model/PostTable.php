<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Db\Model;

use ZnZend\Db\AbstractMapper;

class PostTable extends AbstractMapper
{
    protected $table =  'post';
    protected $resultSetClass = '\Db\Model\Entity\Post';
    protected $primaryKey = 'post_id';
    protected $activeRowState = array('post_isdeleted' => 0);
    protected $deletedRowState = array('post_isdeleted' => 1);
    
}