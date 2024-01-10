<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Hrs\Tecnologia\Plugin\Magento\Company\Model\Company;

class DataProvider
{

    /**
     * @param \Magento\Company\Model\Company\DataProvider $subject
     * @param $result
     * @return mixed
     */
    public function afterGetGeneralData(
        \Magento\Company\Model\Company\DataProvider $subject,
        $result,
        \Magento\Company\Api\Data\CompanyInterface $company
    ) {
        $result['cpf'] = $company->getData('cpf');

        $result['nome'] = $company->getData('nome');

        $result['sobrenome'] = $company->getData('sobrenome');

        return $result;
    }
}

