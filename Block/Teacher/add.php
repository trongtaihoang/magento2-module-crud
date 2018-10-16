<?php
namespace Aht\HttCrud\Block\Teacher;
class add extends \Magento\Framework\View\Element\Template
{
	protected $_teacher;
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Aht\HttCrud\Model\TeacherFactory $teacherFactory)
	{
		parent::__construct($context);
		$this->_teacher = $teacherFactory;
	}

	public function add()
	{
		return 'hello';
	}
}