<?php
namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AdminController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
    
    public function loginAction()
    {
        return new ViewModel();
    }
    
    public function logoutAction()
    {
        return new ViewModel();
    }
}
?>
