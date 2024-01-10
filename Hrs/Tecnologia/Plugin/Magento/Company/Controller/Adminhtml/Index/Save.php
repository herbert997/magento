<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Hrs\Tecnologia\Plugin\Magento\Company\Controller\Adminhtml\Index;

class Save
{

    /**
     * @param \Magento\Company\Controller\Adminhtml\Index\Save $subject
     * @param $result
     * @return mixed
     */
    public function afterSetCompanyRequestData(
        \Magento\Company\Controller\Adminhtml\Index\Save $subject,
        $result
    ) {
        $result->setData('cpf', $subject->getRequest()->getPostValue('general')['cpf']);

        $result->setData('nome', $subject->getRequest()->getPostValue('general')['nome']);

        $result->setData('sobrenome', $subject->getRequest()->getPostValue('general')['sobrenome']);

        return $result;
    }
}

