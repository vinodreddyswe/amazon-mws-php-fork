<?php

/**
 * 
 * @todo replace setters/ getters
 * @todo with* is easily wrapped by __call
 * @todo provide default __get and __set logic
 * @todo allow child classes to merge in fields
 */
abstract class MarketplaceWebService_ModelRequest
extends MarketplaceWebService_Model
{
    public function convert(array $params = array()) {
        // TODO refactor to apply to any given property
        // TODO refactor to use marketplace id list
        if ($this->isSetMarketplace()) {
            $parameters['Marketplace'] =  $this->getMarketplace();
        }
        if ($this->isSetMerchant()) {
            $parameters['Merchant'] =  $this->getMerchant();
        }
        return $params;
    }
    
    public function getDataHandle()
    {
        return null;
    }
    
    public function getContentMd5()
    {
        return null;
    }
}