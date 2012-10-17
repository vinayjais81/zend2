<?php
namespace Admin\Form;

use Zend\Form\Form;

class UserForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('user');
        
        $this->setAttributes(array(
            'action' => '',
            'method' => 'post',
        ));
             
        $this->add(array(
            'name' => 'email',
            'attributes' => array(
                'type'  => 'email',
            ),
            'options' => array(
                'label' => 'Email:',
            ),
        ));
        
        $this->add(array(
            'name' => 'password',
            'attributes' => array(
                'type'  => 'password',
            ),
            'options' => array(
                'label' => 'Password:',
            ),
        ));
        
        $this->add(array(
            'name' => 'role',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'role',
            ),
            'options' => array(
                'label' => 'User Name',
            ),
        ));         
        
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Add',
            ),
        ));
    }
}
?>
