<?php

namespace Aht\HttCrud\Model;

use Magento\Framework\Model\AbstractModel;

/**
 * 
 */
class teacher extends AbstractModel
{
	function _construct()
	{
		$this->_init('Aht\HttCrud\Model\ResourceModel\teacher');
	}
}