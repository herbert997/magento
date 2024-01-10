<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Hrs\Tecnologia\Model;

use Hrs\Tecnologia\Api\Data\HrsInterface;
use Hrs\Tecnologia\Api\Data\HrsInterfaceFactory;
use Hrs\Tecnologia\Api\Data\HrsSearchResultsInterfaceFactory;
use Hrs\Tecnologia\Api\HrsRepositoryInterface;
use Hrs\Tecnologia\Model\ResourceModel\Hrs as ResourceHrs;
use Hrs\Tecnologia\Model\ResourceModel\Hrs\CollectionFactory as HrsCollectionFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

class HrsRepository implements HrsRepositoryInterface
{

    /**
     * @var ResourceHrs
     */
    protected $resource;

    /**
     * @var HrsInterfaceFactory
     */
    protected $hrsFactory;

    /**
     * @var HrsCollectionFactory
     */
    protected $hrsCollectionFactory;

    /**
     * @var Hrs
     */
    protected $searchResultsFactory;

    /**
     * @var CollectionProcessorInterface
     */
    protected $collectionProcessor;


    /**
     * @param ResourceHrs $resource
     * @param HrsInterfaceFactory $hrsFactory
     * @param HrsCollectionFactory $hrsCollectionFactory
     * @param HrsSearchResultsInterfaceFactory $searchResultsFactory
     * @param CollectionProcessorInterface $collectionProcessor
     */
    public function __construct(
        ResourceHrs $resource,
        HrsInterfaceFactory $hrsFactory,
        HrsCollectionFactory $hrsCollectionFactory,
        HrsSearchResultsInterfaceFactory $searchResultsFactory,
        CollectionProcessorInterface $collectionProcessor
    ) {
        $this->resource = $resource;
        $this->hrsFactory = $hrsFactory;
        $this->hrsCollectionFactory = $hrsCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @inheritDoc
     */
    public function save(HrsInterface $hrs)
    {
        try {
            $this->resource->save($hrs);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the hrs: %1',
                $exception->getMessage()
            ));
        }
        return $hrs;
    }

    /**
     * @inheritDoc
     */
    public function get($hrsId)
    {
        $hrs = $this->hrsFactory->create();
        $this->resource->load($hrs, $hrsId);
        if (!$hrs->getId()) {
            throw new NoSuchEntityException(__('hrs with id "%1" does not exist.', $hrsId));
        }
        return $hrs;
    }

    /**
     * @inheritDoc
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->hrsCollectionFactory->create();
        
        $this->collectionProcessor->process($criteria, $collection);
        
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        
        $items = [];
        foreach ($collection as $model) {
            $items[] = $model;
        }
        
        $searchResults->setItems($items);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * @inheritDoc
     */
    public function delete(HrsInterface $hrs)
    {
        try {
            $hrsModel = $this->hrsFactory->create();
            $this->resource->load($hrsModel, $hrs->getHrsId());
            $this->resource->delete($hrsModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the hrs: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * @inheritDoc
     */
    public function deleteById($hrsId)
    {
        return $this->delete($this->get($hrsId));
    }
}

