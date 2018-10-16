<?php
namespace Aht\HttCrud\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
/**
 * 
 */
class teacher extends AbstractDb
{	
	protected function _construct()
    {
        $this->_init('Crud_teacher', 'teacher_id');
    }
}