<?php
// autogenerated file 15.11.2010 08:54
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Base type definition of the request payload, which can carry any typeof payload 
 * content plus optional versioning information and detail level requirements.All 
 * concrete request types are derived from the abstract request type.The naming 
 * convention we use for the concrete type names is the name of the service(the 
 * verb or call name) followed by "RequestType": VerbNameRequestType 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AbstractRequestType.html
 *
 */
class AbstractRequestType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $MessageID;

	/**
	 * @return string
	 */
	function getMessageID()
	{
		return $this->MessageID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMessageID($value)
	{
		$this->MessageID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AbstractRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'MessageID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>