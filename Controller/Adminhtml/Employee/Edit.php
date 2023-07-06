<?php
namespace Webkul\UiForm\Controller\Adminhtml\Employee;

use Magento\Framework\Controller\ResultFactory;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;

class Edit extends \Magento\Backend\App\Action
{

    /**
     * @param Context $context
     * @param Registry $registry
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        Registry $registry,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->backendSession = $context->getSession();
        $this->registry = $registry;
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Execute
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $resultPage;
    }
}
