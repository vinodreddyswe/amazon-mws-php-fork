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
 * MarketplaceWebService_Model_ReportRequestInfo
 * 
 * Properties:
 * <ul>
 * 
 * <li>ReportRequestId: string</li>
 * <li>ReportType: string</li>
 * <li>StartDate: string</li>
 * <li>EndDate: string</li>
 * <li>SubmittedDate: string</li>
 * <li>ReportProcessingStatus: string</li>
 *
 * </ul>
 */ 
class MarketplaceWebService_Model_ReportRequestInfo
extends MarketplaceWebService_Model
{
    /**
     * Construct new MarketplaceWebService_Model_ReportRequestInfo
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ReportRequestId: string</li>
     * <li>ReportType: string</li>
     * <li>StartDate: string</li>
     * <li>EndDate: string</li>
     * <li>SubmittedDate: string</li>
     * <li>ReportProcessingStatus: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'ReportRequestId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ReportType' => array('FieldValue' => null, 'FieldType' => 'string'),
        'StartDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'),
        'EndDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'),
        'Scheduled' => array('FieldValue' => null, 'FieldType' => 'bool'),
        'SubmittedDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'),
        'ReportProcessingStatus' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }
}
