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
 * MarketplaceWebService_Model_ReportInfo
 * 
 * Properties:
 * <ul>
 * 
 * <li>ReportId: string</li>
 * <li>ReportType: string</li>
 * <li>ReportRequestId: string</li>
 * <li>AvailableDate: string</li>
 * <li>Acknowledged: bool</li>
 * <li>AcknowledgedDate: string</li>
 *
 * </ul>
 */ 
class MarketplaceWebService_Model_ReportInfo
extends MarketplaceWebService_Model
{
    /**
     * Construct new MarketplaceWebService_Model_ReportInfo
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ReportId: string</li>
     * <li>ReportType: string</li>
     * <li>ReportRequestId: string</li>
     * <li>AvailableDate: string</li>
     * <li>Acknowledged: bool</li>
     * <li>AcknowledgedDate: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'ReportId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ReportType' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ReportRequestId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'AvailableDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'),
        'Acknowledged' => array('FieldValue' => null, 'FieldType' => 'bool'),
        'AcknowledgedDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'),
        );
        parent::__construct($data);
    }
}