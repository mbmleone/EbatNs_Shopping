<?php
// autogenerated file 15.11.2010 08:54
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ReviewSortCodeType.html
 *
 * @property string CreationTime
 * @property string CustomCode
 */
class ReviewSortCodeType extends EbatNs_FacetType
{
	const CodeType_CreationTime = 'CreationTime';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ReviewSortCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ReviewSortCodeType = new ReviewSortCodeType();

?>