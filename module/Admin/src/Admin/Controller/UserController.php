<?php
namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Admin\Form\UserForm;

class UserController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel(array(
            'users' => $this->getServiceLocator()->get('Admin\Model\UserTable')->fetchAll(),
        ));
    }
    
    public function addAction()
    {
        $form = new UserForm();
        $form->get('role')->setValueOptions($this->getServiceLocator()->get('Admin\Model\RoleTable')->toArray());
        $form->setData($this->getRequest()->getPost());
        
        return new ViewModel(array(
            'form' => $form,
        ));
    }
}
?>
