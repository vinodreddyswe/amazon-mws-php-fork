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
 * MarketplaceWebService_Model_GetFeedSubmissionCountResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetFeedSubmissionCountResult: MarketplaceWebService_Model_GetFeedSubmissionCountResult</li>
 * <li>ResponseMetadata: MarketplaceWebService_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class MarketplaceWebService_Model_GetFeedSubmissionCountResponse
extends MarketplaceWebService_ModelResponse
{
    /**
     * Construct new MarketplaceWebService_Model_GetFeedSubmissionCountResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>GetFeedSubmissionCountResult: MarketplaceWebService_Model_GetFeedSubmissionCountResult</li>
     * <li>ResponseMetadata: MarketplaceWebService_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'GetFeedSubmissionCountResult' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebService_Model_GetFeedSubmissionCountResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebService_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Construct MarketplaceWebService_Model_GetFeedSubmissionCountResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return MarketplaceWebService_Model_GetFeedSubmissionCountResponse 
     */
    public static function fromXML($xml, $ns = null)
    {
        return parent::fromXML($xml, 'GetFeedSubmissionCountResponse');
    }
}