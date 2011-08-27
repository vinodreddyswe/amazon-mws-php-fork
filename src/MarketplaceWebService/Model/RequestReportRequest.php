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
 *  Modified: $Id$
 */

/**
 * MarketplaceWebService_Model_RequestReportRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>Marketplace: string</li>
 * <li>Merchant: string</li>
 * <li>MarketplaceIdList: MarketplaceWebService_Model_IdList</li>
 * <li>ReportType: string</li>
 * <li>StartDate: string</li>
 * <li>EndDate: string</li>
 * <li>ReportOptions: string</li>
 *
 * </ul>
 */ 
class MarketplaceWebService_Model_RequestReportRequest
extends MarketplaceWebService_ModelRequest
{
    /**
     * Construct new MarketplaceWebService_Model_RequestReportRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>MarketplaceIdList: MarketplaceWebService_Model_IdList</li>
     * <li>ReportType: string</li>
     * <li>StartDate: string</li>
     * <li>EndDate: string</li>
     * <li>ReportOptions: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields['ReportType'] = array('FieldValue' => null, 'FieldType' => 'string');
        $this->fields['StartDate'] = array('FieldValue' => null, 'FieldType' => 'DateTime');
        $this->fields['EndDate'] = array('FieldValue' => null, 'FieldType' => 'DateTime');
        $this->fields['ReportOptions'] = array('FieldValue' => null, 'FieldType' => 'string');
        parent::__construct($data);
    }
}
