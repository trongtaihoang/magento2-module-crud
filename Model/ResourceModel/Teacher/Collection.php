<?php
namespace Aht\HttCrud\Model\ResourceModel\Teacher;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * 
 */
class Collection extends AbstractCollection
{
	function _construct()
	{
		$this->_init(\Aht\HttCrud\Model\teacher::class,\Aht\HttCrud\Model\ResourceModel\teacher::class);
	}
}