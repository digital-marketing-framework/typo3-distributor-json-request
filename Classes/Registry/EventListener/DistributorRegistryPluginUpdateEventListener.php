<?php

namespace DigitalMarketingFramework\Typo3\Distributor\JsonRequest\Registry\EventListener;

use DigitalMarketingFramework\Distributor\JsonRequest\DistributorPluginInitialization;
use DigitalMarketingFramework\Typo3\Distributor\Core\Registry\Event\DistributorRegistryPluginUpdateEvent;

class DistributorRegistryPluginUpdateEventListener
{
    public function __invoke(DistributorRegistryPluginUpdateEvent $event): void
    {
        DistributorPluginInitialization::initialize($event->getRegistry());
    }
}
