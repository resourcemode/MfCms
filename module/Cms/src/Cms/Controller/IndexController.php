<?php
namespace Cms\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
       // $this->layout('layout/cms.layout.phtml');

        //will redirect to zfcuser for login.
        $this->redirect()->toRoute('zfcuser');
    }
}
