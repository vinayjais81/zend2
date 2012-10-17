<?php
namespace Admin\Model\Table;

class User
{
    public $id;
    public $email;
    public $password;
    public $role_id;

    public function exchangeArray($data)
    {
        $this->id = (isset($data['user_id'])) ? $data['user_id'] : null;
        $this->email = (isset($data['user_email'])) ? $data['user_email'] : null;
        $this->password  = (isset($data['user_password'])) ? $data['user_password'] : null;
        $this->role_id  = (isset($data['user_role_id'])) ? $data['user_role_id'] : null;
    }
    
}
?>
