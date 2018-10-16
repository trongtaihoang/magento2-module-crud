<?php
namespace Aht\HttCrud\Controller\Adminhtml\Index;

class save extends \Magento\Framework\App\Action\Action
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
    	$data = (array)$this->getRequest()->getPost();
    	$model = $this->teacherFactory->create();
        $id = $this->getRequest()->getParam('teacher_id');
        if($id){
            $model->load($id);
            $model->addData([
            "teacher_name"=>$data['teacher_name'],
            "teacher_email"=>$data['teacher_email'],
            "teacher_phone"=>$data['teacher_phone']]);
            $model->save();
            return $resultRedirect->setPath('*/*/index');
        }else{
        	$model->addData([
        		"teacher_name"=>$data['teacher_name'],
        		"teacher_email"=>$data['teacher_email'],
        		"teacher_phone"=>$data['teacher_phone']]);
        	$model->save();
        	return $resultRedirect->setPath('*/*/index');
        }
    }
}