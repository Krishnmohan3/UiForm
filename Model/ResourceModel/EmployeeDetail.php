<?php
/**
 * Webkul Software.
 *
 * @category Webkul
 * @package Webkul_UiForm
 * @author Webkul
 * @copyright Copyright (c) Webkul Software Private Limited (https://webkul.com)
 * @license https://store.webkul.com/license.html
 */


namespace Webkul\UiForm\Model\ResourceModel;

/**
 * EmployeeDetail RosourceModel Class
 */
class EmployeeDetail extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init("employee_detail", "entity_id");
    }
}
