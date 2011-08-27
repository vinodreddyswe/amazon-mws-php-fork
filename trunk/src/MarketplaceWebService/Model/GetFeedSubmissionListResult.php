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
 * MarketplaceWebService_Model_GetFeedSubmissionListResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>NextToken: string</li>
 * <li>HasNext: bool</li>
 * <li>FeedSubmissionInfo: MarketplaceWebService_Model_FeedSubmissionInfo</li>
 *
 * </ul>
 */ 
class MarketplaceWebService_Model_GetFeedSubmissionListResult
extends MarketplaceWebService_Model
{


    /**
     * Construct new MarketplaceWebService_Model_GetFeedSubmissionListResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>NextToken: string</li>
     * <li>HasNext: bool</li>
     * <li>FeedSubmissionInfo: MarketplaceWebService_Model_FeedSubmissionInfo</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
        'HasNext' => array('FieldValue' => null, 'FieldType' => 'bool'),
        'FeedSubmissionInfo' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebService_Model_FeedSubmissionInfo')),
        );
        parent::__construct($data);
    }

    /**
     * Sets the value of the FeedSubmissionInfo.
     * 
     * @param mixed FeedSubmissionInfo or an array of FeedSubmissionInfo FeedSubmissionInfo
     * @return this instance
     */
    public function setFeedSubmissionInfoList($feedSubmissionInfo) 
    {
        if (!$this->_isNumericArray($feedSubmissionInfo)) {
            $feedSubmissionInfo =  array ($feedSubmissionInfo);    
        }
        $this->fields['FeedSubmissionInfo']['FieldValue'] = $feedSubmissionInfo;
        return $this;
    }

    /**
     * Sets single or multiple values of FeedSubmissionInfo list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withFeedSubmissionInfo($feedSubmissionInfo1, $feedSubmissionInfo2)</code>
     * 
     * @param FeedSubmissionInfo  $feedSubmissionInfoArgs one or more FeedSubmissionInfo
     * @return MarketplaceWebService_Model_GetFeedSubmissionListResult  instance
     */
    public function withFeedSubmissionInfo($feedSubmissionInfoArgs)
    {
        foreach (func_get_args() as $feedSubmissionInfo) {
            $this->fields['FeedSubmissionInfo']['FieldValue'][] = $feedSubmissionInfo;
        }
        return $this;
    }   
}