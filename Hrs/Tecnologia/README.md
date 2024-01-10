# Mage2 Module Hrs Tecnologia

    ``hrs/module-tecnologia``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
project hrs tecnologia

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Hrs`
 - Enable the module by running `php bin/magento module:enable Hrs_Tecnologia`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require hrs/module-tecnologia`
 - enable the module by running `php bin/magento module:enable Hrs_Tecnologia`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration




## Specifications

 - API Endpoint
	- GET - Hrs\Tecnologia\Api\HrsManagementInterface > Hrs\Tecnologia\Model\HrsManagement

 - Block
	- Hrs > hrs.phtml

 - Controller
	- frontend > hrs/index/index

 - Crongroup
	- default

 - Cronjob
	- hrs_tecnologia_hrs

 - GraphQl Endpoint
	- Products

 - Plugin
	- afterGetPrice - hrs > Hrs\Tecnologia\Plugin\Hrs

 - ViewModel
	- Hrs\Tecnologia\ViewModel\Product


## Attributes

 - Category - Hrs (hrs)

 - Company - CPF (cpf)

 - Company - Nome (nome)

 - Company - Sobrenome (sobrenome)

 - Customer - cpf (cpf)

