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
 * MarketplaceWebService_Model_GetReportScheduleListByNextTokenResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>NextToken: string</li>
 * <li>HasNext: bool</li>
 * <li>ReportSchedule: MarketplaceWebService_Model_ReportSchedule</li>
 *
 * </ul>
 */ 
class MarketplaceWebService_Model_GetReportScheduleListByNextTokenResult
extends MarketplaceWebService_Model
{
    /**
     * Construct new MarketplaceWebService_Model_GetReportScheduleListByNextTokenResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>NextToken: string</li>
     * <li>HasNext: bool</li>
     * <li>ReportSchedule: MarketplaceWebService_Model_ReportSchedule</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
        'HasNext' => array('FieldValue' => null, 'FieldType' => 'bool'),
        'ReportSchedule' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebService_Model_ReportSchedule')),
        );
        parent::__construct($data);
    }

    /**
     * Sets the value of the ReportSchedule.
     * 
     * @param mixed ReportSchedule or an array of ReportSchedule ReportSchedule
     * @return this instance
     */
    public function setReportScheduleList($reportSchedule) 
    {
        if (!$this->_isNumericArray($reportSchedule)) {
            $reportSchedule =  array ($reportSchedule);    
        }
        $this->fields['ReportSchedule']['FieldValue'] = $reportSchedule;
        return $this;
    }

    /**
     * Sets single or multiple values of ReportSchedule list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withReportSchedule($reportSchedule1, $reportSchedule2)</code>
     * 
     * @param ReportSchedule  $reportScheduleArgs one or more ReportSchedule
     * @return MarketplaceWebService_Model_GetReportScheduleListByNextTokenResult  instance
     */
    public function withReportSchedule($reportScheduleArgs)
    {
        foreach (func_get_args() as $reportSchedule) {
            $this->fields['ReportSchedule']['FieldValue'][] = $reportSchedule;
        }
        return $this;
    }   
}