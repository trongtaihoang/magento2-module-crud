<?php
namespace Aht\HttCrud\Model\ResourceModel\Teacher;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * 
 */
class Collection extends AbstractCollection
{
	protected $_idFieldName = 'teacher_id';

    /**
     * Load data for preview flag
     *
     * @var bool
     */
    protected $_previewFlag;

    /**
     * Event prefix
     *
     * @var string
     */
    protected $_eventPrefix = 'crud_teacher_collection';

    /**
     * Event object
     *
     * @var string
     */
    protected $_eventObject = 'teacher_collection';
	function _construct()
	{
		$this->_init(\Aht\HttCrud\Model\teacher::class,\Aht\HttCrud\Model\ResourceModel\teacher::class);
		$this->_map['fields']['teacher_id'] = 'main_table.teacher_id';
	}
}