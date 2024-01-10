<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Hrs\Tecnologia\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Hrs extends AbstractDb
{

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('hrs_tecnologia_hrs', 'hrs_id');
    }
}

