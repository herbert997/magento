<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Hrs\Tecnologia\Plugin;

class Hrs
{

    public function afterGetPrice(\hrs $subject, $result, //$functionParam)
    {
        //Your plugin code
        return $result;
    }
}

