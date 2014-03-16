<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Cms\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Db\Model\PostTable;
//use Db\Model\Entity\Post;
//use Faker\Factory;

class PostController extends AbstractActionController
{
    public function pageAction()
    {
        $table = new PostTable();
        $records = $table->fetchAll(); //var_dump($this->params('page'));
        // set the current page to what has been passed in query string, or to 1 if none set
        //$records->setCurrentPageNumber((int)$this->params()->fromQuery('page', 1));
        $records->setCurrentPageNumber((int)$this->params('id'));
        
//        $records->setItemCountPerPage(5);
//        foreach ($records as $record) {
//            var_dump($record->getName());
//        } exit;
        // set the number of items per page to 10
        $records->setItemCountPerPage(5);
         
        return new ViewModel(array(
            'records' => $records,
        ));
    }
    
    public function addAction()
    {
        return new ViewModel();
    }

}
