<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Hrs\Tecnologia\Model;

class HrsManagement implements \Hrs\Tecnologia\Api\HrsManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function getHrs($param)
    {
        return 'hello api GET return the $param ' . $param;
    }
}

