<?php

namespace DigitalMarketingFramework\Typo3\Distributor\JsonRequest\ConfigurationDocument\Storage\EventListener;

use DigitalMarketingFramework\Typo3\Core\ConfigurationDocument\Storage\EventListener\StaticConfigurationDocumentEventListener as OriginalStaticConfigurationDocumentEventListener;

class StaticConfigurationDocumentEventListener extends OriginalStaticConfigurationDocumentEventListener
{
    protected function getExtensionKey(): string
    {
        return 'dmf_distributor_json_request';
    }
}
