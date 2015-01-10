<?php
namespace Cms\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Faker\Factory;

class TestController extends AbstractActionController
{
    public function indexAction()
    {
        //echo 'Test Controller: index action';
        $faker = Factory::create();

        return new ViewModel(array(
            'name' => $faker->name,
            'email' => $faker->email,
            'address' => $faker->address,
            'text' => $faker->text,
        ));
    }
    
    public function listAction()
    {
        echo 'list Action test controller';
    }
}
