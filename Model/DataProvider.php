<?php
namespace Webkul\UiForm\Model;

use Webkul\UiForm\Model\ResourceModel\EmployeeDetail\CollectionFactory;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * @var Array
     */
    protected $_loadedData;
    
    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param CollectionFactory $collectionFactory
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $collectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    /**
     * Get data
     *
     * @return array
     */
    public function getData()
    {
        if (isset($this->_loadedData)) {
            return $this->_loadedData;
        }
        
        $collection = $this->collection->getItems();
        foreach ($collection as $employee) {
            $this->_loadedData[$employee->getId()] = $employee->getData();
        }
        return $this->_loadedData;
    }
}
