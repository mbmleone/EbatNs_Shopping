<?php
// autogenerated file 18.03.2011 12:14
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * SearchFlagCodeType - Search flags for FindItemsAdvanced. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SearchFlagCodeType.html
 *
 * @property string Charity
 * @property string Gift
 * @property string NowAndNew
 * @property string LocalSearch
 * @property string FreeShipping
 * @property string Gallery
 * @property string Picture
 * @property string GetItFast
 * @property string Lot
 * @property string GermanMotorsSearchable
 * @property string WorldOfGood
 * @property string DigitalDelivery
 * @property string Featured
 * @property string SuperFeatured
 * @property string AutoPay
 * @property string BestOffer
 * @property string CustomCode
 */
class SearchFlagCodeType extends EbatNs_FacetType
{
	const CodeType_Charity = 'Charity';
	const CodeType_Gift = 'Gift';
	const CodeType_NowAndNew = 'NowAndNew';
	const CodeType_LocalSearch = 'LocalSearch';
	const CodeType_FreeShipping = 'FreeShipping';
	const CodeType_Gallery = 'Gallery';
	const CodeType_Picture = 'Picture';
	const CodeType_GetItFast = 'GetItFast';
	const CodeType_Lot = 'Lot';
	const CodeType_GermanMotorsSearchable = 'GermanMotorsSearchable';
	const CodeType_WorldOfGood = 'WorldOfGood';
	const CodeType_DigitalDelivery = 'DigitalDelivery';
	const CodeType_Featured = 'Featured';
	const CodeType_SuperFeatured = 'SuperFeatured';
	const CodeType_AutoPay = 'AutoPay';
	const CodeType_BestOffer = 'BestOffer';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SearchFlagCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SearchFlagCodeType = new SearchFlagCodeType();

?>
