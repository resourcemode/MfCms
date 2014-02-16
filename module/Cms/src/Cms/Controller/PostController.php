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

class PostController extends AbstractActionController
{
    public function indexAction()
    {
        $table = new PostTable();
        $records = $table->fetchAll();
        // set the current page to what has been passed in query string, or to 1 if none set
        $records->setCurrentPageNumber((int)$this->params()->fromQuery('page', 1));
        // set the number of items per page to 10
        $records->setItemCountPerPage(2);
         
        return new ViewModel(array(
            'records' => $records,
        ));
    }

}
