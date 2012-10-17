<?php
namespace Admin\Model\Table;

class Role
{
    public $id;
    public $name;

    public function exchangeArray($data)
    {
        $this->id = (isset($data['user_role_id'])) ? $data['user_role_id'] : null;
        $this->name = (isset($data['user_role_name'])) ? $data['user_role_name'] : null;
    }
    
}
?>
