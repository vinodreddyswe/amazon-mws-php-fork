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

/**
 * MarketplaceWebService_Model_ContentType
 *
 * Defines the content type, encoding and character set used to send
 * a feed to MWS
 * 
 * @param Associative Array or leave as default types.
 * Valid Properties:
 * <ul>
 * 
 * <li>ContentType: string - Possible types: OctetStream</li>
 *
 * </ul>
 */ 

/* 
 * The only content type that MWS currently supports is octet-stream
 */
class MarketplaceWebService_Model_ContentType
extends MarketplaceWebService_Model
{
	public function __construct($data = null) {
        $this->fields = array (
        'ContentType' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Parameters' => array('FieldValue' => null, 'FieldType' => array('string')),
        );
        
        parent::__construct($data);
    }
    
	public function toString() {
		$contentType = $this->ContentType;
		
		return $this->__isset('Parameters') ? 
			$contentType . ';' . implode(';', $this->Parameters) :
			$contentType;
	}
}
