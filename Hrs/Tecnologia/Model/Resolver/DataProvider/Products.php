<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Hrs\Tecnologia\Model\Resolver\DataProvider;

class Products
{

    private $storeConfig;

    /**
     * @param \Magento\Store\Api\StoreConfig $storeConfig
     */
    public function __construct(
        \Magento\Store\Api\StoreConfig $storeConfig
    ) {
        $this->storeConfig = $storeConfig;
    }

    public function getProducts()
    {
        return 'proviced data';
    }
}

