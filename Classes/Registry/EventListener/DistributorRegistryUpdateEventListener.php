<?php

namespace DigitalMarketingFramework\Typo3\Distributor\JsonRequest\Registry\EventListener;

use DigitalMarketingFramework\Distributor\JsonRequest\DistributorJsonRequestInitialization;
use DigitalMarketingFramework\Typo3\Distributor\Core\Registry\EventListener\AbstractDistributorRegistryUpdateEventListener;

class DistributorRegistryUpdateEventListener extends AbstractDistributorRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new DistributorJsonRequestInitialization('dmf_distributor_json_request'));
    }
}
