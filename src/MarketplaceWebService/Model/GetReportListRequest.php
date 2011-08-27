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
 * MarketplaceWebService_Model_GetReportListRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>Marketplace: string</li>
 * <li>Merchant: string</li>
 * <li>MaxCount: int</li>
 * <li>ReportTypeList: MarketplaceWebService_Model_TypeList</li>
 * <li>Acknowledged: bool</li>
 * <li>AvailableFromDate: string</li>
 * <li>AvailableToDate: string</li>
 * <li>ReportRequestIdList: MarketplaceWebService_Model_IdList</li>
 *
 * </ul>
 */ 
class MarketplaceWebService_Model_GetReportListRequest
extends MarketplaceWebService_ModelRequest
{

    /**
     * Construct new MarketplaceWebService_Model_GetReportListRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>MaxCount: int</li>
     * <li>ReportTypeList: MarketplaceWebService_Model_TypeList</li>
     * <li>Acknowledged: bool</li>
     * <li>AvailableFromDate: string</li>
     * <li>AvailableToDate: string</li>
     * <li>ReportRequestIdList: MarketplaceWebService_Model_IdList</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Merchant' => array('FieldValue' => null, 'FieldType' => 'string'),
        'MaxCount' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ReportTypeList' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebService_Model_TypeList'),
        'Acknowledged' => array('FieldValue' => null, 'FieldType' => 'bool'),
        'AvailableFromDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'),
        'AvailableToDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'),
        'ReportRequestIdList' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebService_Model_IdList'),
        );
        parent::__construct($data);
    }
}