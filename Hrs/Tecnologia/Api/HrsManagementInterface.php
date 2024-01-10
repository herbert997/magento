<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Hrs\Tecnologia\Api;

interface HrsManagementInterface
{

    /**
     * GET for hrs api
     * @param string $param
     * @return string
     */
    public function getHrs($param);
}

