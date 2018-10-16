<?php

namespace Aht\HttCrud\Model\Teacher;
/**
 * 
 */
use Aht\HttCrud\Model\ResourceModel\Teacher\CollectionFactory;
use Magento\Framework\Api\Search\ReportingInterface;
use Magento\Framework\Api\Search\SearchCriteriaBuilder;
use Magento\Framework\Api\FilterBuilder;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\Request\DataPersistorInterface;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
	protected $loadedData;
    
	public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $contactCollectionFactory,
        // DataPersistorInterface $dataPersistor,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $contactCollectionFactory->create();
        // $this->dataPersistor = $dataPersistor;
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }


    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }
        $items = $this->collection->getItems();
        /** @var $page \Magento\Cms\Model\Page */
        foreach ($items as $teacher) {
            $this->loadedData[$teacher->getId()] = $teacher->getData();
        }

        // $data = $this->dataPersistor->get('crud_teacher'teacher);
        if (!empty($data)) {
            $teacher = $this->collection->getNewEmptyItem();
            $teacher->setData($data);
            $this->loadedData[$teacher->getId()] = $teacher->getData();
            // $this->dataPersistor->clear('crud_teacher');
        }
        // var_dump($this->loadedData);
        return $this->loadedData;
    }
}