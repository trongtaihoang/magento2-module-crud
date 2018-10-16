<?php

namespace Aht\HttCrud\Ui\Component;

/**
 * 
 */
use Aht\HttCrud\Model\ResourceModel\Teacher\CollectionFactory;
class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $contactCollectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $contactCollectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }


    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }
        // var_dump($this->collection->toArray());
        return $this->collection->toArray();

    }
}