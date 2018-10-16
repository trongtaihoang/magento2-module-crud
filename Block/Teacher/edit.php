<?php
namespace Aht\HttCrud\Block\Teacher;
use Magento\Framework\App\RequestInterface;
class edit extends \Magento\Framework\View\Element\Template
{
	protected $_teacher;
	protected $_request;
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Aht\HttCrud\Model\TeacherFactory $teacherFactory,
		RequestInterface $request)
	{
		parent::__construct($context);
		$this->_teacher = $teacherFactory;
		$this->_request = $request;
	}

	public function getTeacher()
	{
		$teacher = $this->_teacher->create();
		$id = $this->_request->getParam('teacher_id');
		$collection = $teacher->load($id);
		return $collection;
	}
}