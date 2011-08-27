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
 * MarketplaceWebService_Model_GetReportRequestListResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>NextToken: string</li>
 * <li>HasNext: bool</li>
 * <li>ReportRequestInfo: MarketplaceWebService_Model_ReportRequestInfo</li>
 *
 * </ul>
 */ 
class MarketplaceWebService_Model_GetReportRequestListResult
extends MarketplaceWebService_Model
{
    /**
     * Construct new MarketplaceWebService_Model_GetReportRequestListResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>NextToken: string</li>
     * <li>HasNext: bool</li>
     * <li>ReportRequestInfo: MarketplaceWebService_Model_ReportRequestInfo</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
        'HasNext' => array('FieldValue' => null, 'FieldType' => 'bool'),
        'ReportRequestInfo' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebService_Model_ReportRequestInfo')),
        );
        parent::__construct($data);
    }

    /**
     * Sets the value of the ReportRequestInfo.
     * 
     * @param mixed ReportRequestInfo or an array of ReportRequestInfo ReportRequestInfo
     * @return this instance
     */
    public function setReportRequestInfoList($reportRequestInfo) 
    {
        if (!$this->_isNumericArray($reportRequestInfo)) {
            $reportRequestInfo =  array ($reportRequestInfo);    
        }
        $this->fields['ReportRequestInfo']['FieldValue'] = $reportRequestInfo;
        return $this;
    }

    /**
     * Sets single or multiple values of ReportRequestInfo list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withReportRequestInfo($reportRequestInfo1, $reportRequestInfo2)</code>
     * 
     * @param ReportRequestInfo  $reportRequestInfoArgs one or more ReportRequestInfo
     * @return MarketplaceWebService_Model_GetReportRequestListResult  instance
     */
    public function withReportRequestInfo($reportRequestInfoArgs)
    {
        foreach (func_get_args() as $reportRequestInfo) {
            $this->fields['ReportRequestInfo']['FieldValue'][] = $reportRequestInfo;
        }
        return $this;
    }   
}