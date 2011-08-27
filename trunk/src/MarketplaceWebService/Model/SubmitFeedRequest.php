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
 * MarketplaceWebService_Model_SubmitFeedRequest
 *
 * Properties:
 * <ul>
 *
 * <li>Marketplace: string</li>
 * <li>Merchant: string</li>
 * <li>MarketplaceIdList: MarketplaceWebService_Model_IdList</li>
 * <li>FeedContent: string</li>
 * <li>FeedType: string</li>
 * <li>PurgeAndReplace: bool</li>
 *
 * </ul>
 */
class MarketplaceWebService_Model_SubmitFeedRequest
extends MarketplaceWebService_ModelRequest
{
    protected static $DEFAULT_CONTENT_TYPE;
    
    /**
     * Construct new MarketplaceWebService_Model_SubmitFeedRequest
     *
     * @param mixed $data DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>MarketplaceIdList: MarketplaceWebService_Model_IdList</li>
     * <li>FeedContent: string</li>
     * <li>FeedType: string</li>
     * <li>PurgeAndReplace: bool</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        // TODO seems not the optimal way to do things...
        self::$DEFAULT_CONTENT_TYPE = new MarketplaceWebService_Model_ContentType(
        array('ContentType' => 'application/octet-stream'));

        // Here we're setting the content-type field directly to the object, but beware the actual
        // method of construction from associative arrays from the client interface would do something like:
        // $parameters = array ('ContentType' => array('ContentType' => 'application/octet-stream'));

        $this->fields = array (
        'Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Merchant' => array('FieldValue' => null, 'FieldType' => 'string'),
        'MarketplaceIdList' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebService_Model_IdList'),
        'FeedContent' => array ('FieldValue' => null, 'FieldType' => 'string'),
        'FeedType' => array('FieldValue' => null, 'FieldType' => 'string'),
        'PurgeAndReplace' => array('FieldValue' => null, 'FieldType' => 'bool'),
        'ContentMd5' => array ('FieldValue' => null, 'FieldType' => 'string'),
 	    'ContentType' => array ('FieldValue' => self::$DEFAULT_CONTENT_TYPE, 'FieldType' => 'MarketplaceWebService_Model_ContentType')      
        );

        parent::__construct($data);

        if ( null !== $this->fields['ContentType']['FieldValue'] ) {
            $this->verifySupportedContentType($this->fields['ContentType']['FieldValue']);
        }
    }

    public function verifySupportedContentType($supplied) {
        if (!($supplied == self::$DEFAULT_CONTENT_TYPE)) {
            throw new MarketplaceWebService_Exception(array('Message' =>
    			"Unsupported ContentType " .  $supplied->getContentType() . 
    			" ContentType must be " . self::$DEFAULT_CONTENT_TYPE->getContentType()));	
        }
    }

    public function setContentType($value) {
        $this->verifySupportedContentType($value);
        $this->fields['ContentType']['FieldValue'] = $value;
        return $this;
    }
}
