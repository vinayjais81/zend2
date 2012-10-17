<?php

namespace Admin\Model\Table;

use Zend\Db\TableGateway\AbstractTableGateway;

class Db extends AbstractTableGateway
{
    /**
     * Возвращяет все строки
     * 
     * @return type массив строк
     */
    public function fetchAll()
    {
        return $this->select();
    }

    /**
     * Достает строку по id
     * 
     * @param type $id передаем id строки
     * @return type возвращяет строку таблицы
     */
    public function getRowId($id)
    {
        return $this->select(array(
                    'id' => (int) $id,
                ))->current();
    }

    public function deleteId($id)
    {
        $this->delete(array(
            'id' => $id,
        ));
    }

}

?>
