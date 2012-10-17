<?php
namespace Admin\Model;

use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\AbstractTableGateway;

use Admin\Model\Table;

class RoleTable extends Table\Db
{
    protected $table = 'zend_user_role';

    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
        $this->resultSetPrototype = new ResultSet();
        $this->resultSetPrototype->setArrayObjectPrototype(new Table\Role);
        $this->initialize();
    }
    
    public function toArray()
    {
        $toArray = array();
        $rows = $this->fetchAll();
        foreach ($rows as $row)
        {
            $toArray[$row->id] = $row->name;
        }
        return $toArray;
    }
}
?>
