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
 * MarketplaceWebService_Model_GetReportCountResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Count: int</li>
 *
 * </ul>
 */ 
class MarketplaceWebService_Model_GetReportCountResult
extends MarketplaceWebService_Model
{
    /**
     * Construct new MarketplaceWebService_Model_GetReportCountResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Count: int</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'Count' => array('FieldValue' => null, 'FieldType' => 'int'),
        );
        parent::__construct($data);
    }
}