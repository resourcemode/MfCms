<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $records = array(
            'ZF2 - Event Manager, Service Manager',
            'Twitter Bootstrap Navigation Menu - add active class',
            'Create custom controller plugin/helper zf2.',
            'zf2 create select/drop down box and populate options in controller.',
            'Ways of rendering your form in Zf2',
        );
        
        return new ViewModel(array(
            'records' => $records,
        ));
    }
}
