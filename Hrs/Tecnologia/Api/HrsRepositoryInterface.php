<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Hrs\Tecnologia\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface HrsRepositoryInterface
{

    /**
     * Save hrs
     * @param \Hrs\Tecnologia\Api\Data\HrsInterface $hrs
     * @return \Hrs\Tecnologia\Api\Data\HrsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Hrs\Tecnologia\Api\Data\HrsInterface $hrs
    );

    /**
     * Retrieve hrs
     * @param string $hrsId
     * @return \Hrs\Tecnologia\Api\Data\HrsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($hrsId);

    /**
     * Retrieve hrs matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Hrs\Tecnologia\Api\Data\HrsSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete hrs
     * @param \Hrs\Tecnologia\Api\Data\HrsInterface $hrs
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Hrs\Tecnologia\Api\Data\HrsInterface $hrs
    );

    /**
     * Delete hrs by ID
     * @param string $hrsId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($hrsId);
}

