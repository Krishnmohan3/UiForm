<?php
 
namespace Webkul\UiForm\Block\Adminhtml\Employee;

use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Registry;

class GenericButton
{
    /**
     * @var \Magento\Framework\Registry
     */
    protected $registry;

    /**
     * @var URLBuilder
     */
    protected $urlBuilder;
    
    /**
     * @param Context $context
     * @param Registry $registry
     */
    public function __construct(
        Context $context,
        Registry $registry
    ) {
        $this->urlBuilder = $context->getUrlBuilder();
        $this->registry = $registry;
    }
    
    /**
     * Get Employee Id from Registry
     *
     * @return Int|Null $employeeId
     */
    public function getId()
    {
        $employee = $this->registry->registry('employee_detail');
        return $employee ? $employee->getId() : null;
    }

    /**
     * Get Url
     *
     * @param string $route
     * @param array $params
     *
     * @return String
     */
    public function getUrl($route = '', $params = [])
    {
        return $this->urlBuilder->getUrl($route, $params);
    }
}
