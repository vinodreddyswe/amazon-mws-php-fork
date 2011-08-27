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
 * MarketplaceWebService_Model_ErrorResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>Error: MarketplaceWebService_Model_Error</li>
 * <li>RequestId: string</li>
 *
 * </ul>
 */ 
class MarketplaceWebService_Model_ErrorResponse
extends MarketplaceWebService_ModelResponse
{
    /**
     * Construct new MarketplaceWebService_Model_ErrorResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Error: MarketplaceWebService_Model_Error</li>
     * <li>RequestId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'Error' => array('FieldValue' => array(), 'FieldType' => 'MarketplaceWebService_Model_Error'),
        'RequestId' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct MarketplaceWebService_Model_ErrorResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return MarketplaceWebService_Model_ErrorResponse 
     */
    public static function fromXML($xml, $ns = null)
    {
        return parent::fromXML($xml, 'ErrorResponse');
    }

    /**
     * Sets the value of the Error.
     * 
     * @param mixed Error or an array of Error Error
     * @return this instance
     */
    public function setError($error) 
    {
        if (!$this->_isNumericArray($error)) {
            $error =  array ($error);    
        }
        $this->fields['Error']['FieldValue'] = $error;
        return $this;
    }

    /**
     * Sets single or multiple values of Error list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withError($error1, $error2)</code>
     * 
     * @param Error  $errorArgs one or more Error
     * @return MarketplaceWebService_Model_ErrorResponse  instance
     */
    public function withError($errorArgs)
    {
        foreach (func_get_args() as $error) {
            $this->fields['Error']['FieldValue'][] = $error;
        }
        return $this;
    }   
}