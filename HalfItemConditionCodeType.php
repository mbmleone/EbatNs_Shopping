<?php
// autogenerated file 29.12.2011 13:01
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Controls values for item condition, especially for Books catalog. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/HalfItemConditionCodeType.html
 *
 * @property string BrandNew
 * @property string LikeNew
 * @property string VeryGood
 * @property string Good
 * @property string Acceptable
 * @property string Used
 * @property string CustomCode
 */
class HalfItemConditionCodeType extends EbatNs_FacetType
{
	const CodeType_BrandNew = 'BrandNew';
	const CodeType_LikeNew = 'LikeNew';
	const CodeType_VeryGood = 'VeryGood';
	const CodeType_Good = 'Good';
	const CodeType_Acceptable = 'Acceptable';
	const CodeType_Used = 'Used';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('HalfItemConditionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_HalfItemConditionCodeType = new HalfItemConditionCodeType();

?>
