<?php
// autogenerated file 15.11.2010 08:54
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * CommentTypeCodeType - Type declaration to be used by other schema.These are the 
 * possible codes to specify the types of feedback/comment.Additional information 
 * about feedback is available in the online Help of the eBay site. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CommentTypeCodeType.html
 *
 * @property string Positive
 * @property string Neutral
 * @property string Negative
 * @property string Withdrawn
 * @property string IndependentlyWithdrawn
 * @property string CustomCode
 */
class CommentTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Positive = 'Positive';
	const CodeType_Neutral = 'Neutral';
	const CodeType_Negative = 'Negative';
	const CodeType_Withdrawn = 'Withdrawn';
	const CodeType_IndependentlyWithdrawn = 'IndependentlyWithdrawn';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CommentTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_CommentTypeCodeType = new CommentTypeCodeType();

?>
