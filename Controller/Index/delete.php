<?php
namespace Aht\HttCrud\Controller\Index;

class delete extends \Magento\Framework\App\Action\Action
{
	protected $teacherFactory;
	protected $context;
	protected $resultRedirect;
	public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Aht\HttCrud\Model\TeacherFactory $teacherFactory
    ) {
        $this->teacherFactory = $teacherFactory;
        parent::__construct($context);
    }
    public function execute()
    {
    	$resultRedirect = $this->resultRedirectFactory->create();
    	$id = $this->getRequest()->getParam('teacher_id');
    	$model = $this->teacherFactory->create();
    	$model->load($id);
    	$model->delete();
    	return $resultRedirect->setPath('*/*/index');
    }
}