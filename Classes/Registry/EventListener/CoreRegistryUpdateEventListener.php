<?php

namespace DigitalMarketingFramework\Typo3\Distributor\JsonRequest\Registry\EventListener;

use DigitalMarketingFramework\Distributor\JsonRequest\DistributorJsonRequestInitialization;
use DigitalMarketingFramework\Typo3\Core\Registry\EventListener\AbstractCoreRegistryUpdateEventListener;

class CoreRegistryUpdateEventListener extends AbstractCoreRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new DistributorJsonRequestInitialization('dmf_distributor_json_request'));
    }
}
