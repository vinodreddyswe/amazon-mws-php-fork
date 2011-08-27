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
 * MarketplaceWebService_Model_FeedSubmissionInfo
 * 
 * Properties:
 * <ul>
 * 
 * <li>FeedSubmissionId: string</li>
 * <li>FeedType: string</li>
 * <li>SubmittedDate: string</li>
 * <li>FeedProcessingStatus: string</li>
 * <li>StartedProcessingDate: string</li>
 * <li>CompletedProcessingDate: string</li>
 *
 * </ul>
 */ 
class MarketplaceWebService_Model_FeedSubmissionInfo
extends MarketplaceWebService_Model
{
    /**
     * Construct new MarketplaceWebService_Model_FeedSubmissionInfo
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>FeedSubmissionId: string</li>
     * <li>FeedType: string</li>
     * <li>SubmittedDate: string</li>
     * <li>FeedProcessingStatus: string</li>
     * <li>StartedProcessingDate: string</li>
     * <li>CompletedProcessingDate: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'FeedSubmissionId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'FeedType' => array('FieldValue' => null, 'FieldType' => 'string'),
        'SubmittedDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'),
        'FeedProcessingStatus' => array('FieldValue' => null, 'FieldType' => 'string'),
        'StartedProcessingDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'),
        'CompletedProcessingDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'),
        );
        parent::__construct($data);
    }
}