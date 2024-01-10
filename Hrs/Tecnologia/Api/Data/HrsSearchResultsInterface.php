<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Hrs\Tecnologia\Api\Data;

interface HrsSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get hrs list.
     * @return \Hrs\Tecnologia\Api\Data\HrsInterface[]
     */
    public function getItems();

    /**
     * Set price list.
     * @param \Hrs\Tecnologia\Api\Data\HrsInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

