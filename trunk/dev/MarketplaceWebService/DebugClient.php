<?php

class MarketplaceWebService_DebugClient
extends MarketplaceWebService_Client
{

    protected function performRequest($action, array $converted, $dataHandle = null, $contentMd5 = null) {

        $curlOptions = $this->configureCurlOptions($action, $converted, $dataHandle, $contentMd5);

        if (!$curlOptions[CURLOPT_RETURNTRANSFER]) {
            $curlOptions[CURLOPT_RETURNTRANSFER] = true;
        }

        var_dump($curlOptions);

        return array (
        'Status' => 'DEBUG', 
        'ResponseBody' => '');
    }
}