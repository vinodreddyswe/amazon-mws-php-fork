<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     MarketplaceWebService
 *  @copyright   Copyright 2009 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-01-01
 */
/******************************************************************************* 

 *  Marketplace Web Service PHP5 Library
 *  Generated: Thu May 07 13:07:36 PDT 2009
 * 
 */

/**
 * MarketplaceWebService_Model_CancelReportRequestsResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>CancelReportRequestsResult: MarketplaceWebService_Model_CancelReportRequestsResult</li>
 * <li>ResponseMetadata: MarketplaceWebService_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class MarketplaceWebService_Model_CancelReportRequestsResponse
extends MarketplaceWebService_ModelResponse
{
    /**
     * Construct new MarketplaceWebService_Model_CancelReportRequestsResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>CancelReportRequestsResult: MarketplaceWebService_Model_CancelReportRequestsResult</li>
     * <li>ResponseMetadata: MarketplaceWebService_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'CancelReportRequestsResult' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebService_Model_CancelReportRequestsResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebService_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Construct MarketplaceWebService_Model_CancelReportRequestsResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return MarketplaceWebService_Model_CancelReportRequestsResponse 
     */
    public static function fromXML($xml, $ns = null)
    {
        return parent::fromXML($xml, 'CancelReportRequestsResponse');
    }
}