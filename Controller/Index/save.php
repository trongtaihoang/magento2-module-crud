<?php
namespace Aht\HttCrud\Controller\Index;

class save extends \Magento\Framework\App\Action\Action
{
	protected $_teacherFactory;
	protected $context;
	protected $resultRedirect;
	public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Aht\HttCrud\Model\TeacherFactory $teacherFactory
    ) {
        $this->_teacherFactory = $teacherFactory;
        parent::__construct($context);
    }
    public function execute()
    {
    	$resultRedirect = $this->resultRedirectFactory->create();
    	$data = (array)$this->getRequest()->getPost();
    	$model = $this->_teacherFactory->create();
        $id = $this->getRequest()->getParam('teacher_id');
        if($id){
            $model->load($id);
            $model->addData([
            "teacher_name"=>$data['name'],
            "teacher_email"=>$data['email'],
            "teacher_phone"=>$data['phone']]);
            $model->save();
            return $resultRedirect->setPath('*/*/index');
        }else{
        	$model->addData([
        		"teacher_name"=>$data['name'],
        		"teacher_email"=>$data['email'],
        		"teacher_phone"=>$data['phone']]);
        	$model->save();
        	return $resultRedirect->setPath('*/*/index');
        }
    }
}