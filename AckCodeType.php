<?php
// autogenerated file 29.12.2011 13:01
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * AckCodeType - Type declaration to be used by other schema. This code 
 * identifiesthe acknowledgement code types that eBay could use to communicate the 
 * status ofprocessing a (request) message to an application. This code would be 
 * used as partof a response message that contains an application-level 
 * acknowledgement element. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AckCodeType.html
 *
 * @property string Success
 * @property string Failure
 * @property string Warning
 * @property string PartialFailure
 * @property string CustomCode
 */
class AckCodeType extends EbatNs_FacetType
{
	const CodeType_Success = 'Success';
	const CodeType_Failure = 'Failure';
	const CodeType_Warning = 'Warning';
	const CodeType_PartialFailure = 'PartialFailure';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AckCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_AckCodeType = new AckCodeType();

?>
