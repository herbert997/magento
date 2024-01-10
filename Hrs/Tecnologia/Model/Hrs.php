<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Hrs\Tecnologia\Model;

use Hrs\Tecnologia\Api\Data\HrsInterface;
use Magento\Framework\Model\AbstractModel;

class Hrs extends AbstractModel implements HrsInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\Hrs\Tecnologia\Model\ResourceModel\Hrs::class);
    }

    /**
     * @inheritDoc
     */
    public function getHrsId()
    {
        return $this->getData(self::HRS_ID);
    }

    /**
     * @inheritDoc
     */
    public function setHrsId($hrsId)
    {
        return $this->setData(self::HRS_ID, $hrsId);
    }

    /**
     * @inheritDoc
     */
    public function getPrice()
    {
        return $this->getData(self::PRICE);
    }

    /**
     * @inheritDoc
     */
    public function setPrice($price)
    {
        return $this->setData(self::PRICE, $price);
    }
}

