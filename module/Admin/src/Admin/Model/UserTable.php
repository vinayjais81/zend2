<?php
namespace Admin\Model;

use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\AbstractTableGateway;

use Admin\Model\Table;

class UserTable extends Table\Db
{
    protected $table = 'zend_user';

    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
        $this->resultSetPrototype = new ResultSet();
        $this->resultSetPrototype->setArrayObjectPrototype(new Table\User);
        $this->initialize();
    }
}
?>
