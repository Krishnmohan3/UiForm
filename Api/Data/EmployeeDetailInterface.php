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

namespace Webkul\UiForm\Api\Data;

/**
 * EmployeeDetail Model Interface
 */
interface EmployeeDetailInterface
{
    public const ENTITY_ID = 'entity_id';

    public const EMPLOYEE_ID = 'employee_id';

    public const NAME = 'name';

    public const SALARY = 'salary';

    public const ADDRESS = 'address';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    /**
     * Set EntityId
     *
     * @param int $entityId
     * @return Webkul\UiForm\Api\Data\EmployeeDetailInterface
     */
    public function setEntityId($entityId);
    /**
     * Get EntityId
     *
     * @return int
     */
    public function getEntityId();
    /**
     * Set EmployeeId
     *
     * @param int $employeeId
     * @return Webkul\UiForm\Api\Data\EmployeeDetailInterface
     */
    public function setEmployeeId($employeeId);
    /**
     * Get EmployeeId
     *
     * @return int
     */
    public function getEmployeeId();
    /**
     * Set Name
     *
     * @param string $name
     * @return Webkul\UiForm\Api\Data\EmployeeDetailInterface
     */
    public function setName($name);
    /**
     * Get Name
     *
     * @return string
     */
    public function getName();
    /**
     * Set Salary
     *
     * @param string $salary
     * @return Webkul\UiForm\Api\Data\EmployeeDetailInterface
     */
    public function setSalary($salary);
    /**
     * Get Salary
     *
     * @return string
     */
    public function getSalary();
    /**
     * Set Address
     *
     * @param string $address
     * @return Webkul\UiForm\Api\Data\EmployeeDetailInterface
     */
    public function setAddress($address);
    /**
     * Get Address
     *
     * @return string
     */
    public function getAddress();
    /**
     * Set CreatedAt
     *
     * @param string $createdAt
     * @return Webkul\UiForm\Api\Data\EmployeeDetailInterface
     */
    public function setCreatedAt($createdAt);
    /**
     * Get CreatedAt
     *
     * @return string
     */
    public function getCreatedAt();
    /**
     * Set UpdatedAt
     *
     * @param string $updatedAt
     * @return Webkul\UiForm\Api\Data\EmployeeDetailInterface
     */
    public function setUpdatedAt($updatedAt);
    /**
     * Get UpdatedAt
     *
     * @return string
     */
    public function getUpdatedAt();
}
