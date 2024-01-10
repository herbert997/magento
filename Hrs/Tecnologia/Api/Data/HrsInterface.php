<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Hrs\Tecnologia\Api\Data;

interface HrsInterface
{

    const PRICE = 'price';
    const HRS_ID = 'hrs_id';

    /**
     * Get hrs_id
     * @return string|null
     */
    public function getHrsId();

    /**
     * Set hrs_id
     * @param string $hrsId
     * @return \Hrs\Tecnologia\Hrs\Api\Data\HrsInterface
     */
    public function setHrsId($hrsId);

    /**
     * Get price
     * @return string|null
     */
    public function getPrice();

    /**
     * Set price
     * @param string $price
     * @return \Hrs\Tecnologia\Hrs\Api\Data\HrsInterface
     */
    public function setPrice($price);
}

