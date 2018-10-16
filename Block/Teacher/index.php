<?php
namespace Aht\HttCrud\Block\Teacher;
class index extends \Magento\Framework\View\Element\Template
{
	protected $_teacher;
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Aht\HttCrud\Model\TeacherFactory $teacherFactory)
	{
		parent::__construct($context);
		$this->_teacher = $teacherFactory;
	}

	public function getTeachers()
	{
		$teacher = $this->_teacher->create();
		$collection = $teacher->getCollection();
		return $collection;
	}
}