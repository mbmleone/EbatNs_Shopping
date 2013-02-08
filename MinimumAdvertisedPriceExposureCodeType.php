<?php
// autogenerated file 29.12.2011 13:30
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Defines how the buyer is to view the discounted price for MAP items. If a seller 
 * offers an itemfor less than the item's agreed upon Minimum Advertised Price 
 * (MAP), the discounted price of theitem cannot be displayed on the page 
 * containing the item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MinimumAdvertisedPriceExposureCodeType.html
 *
 * @property string PreCheckout
 * @property string DuringCheckout
 * @property string None
 * @property string CustomCode
 */
class MinimumAdvertisedPriceExposureCodeType extends EbatNs_FacetType
{
	const CodeType_PreCheckout = 'PreCheckout';
	const CodeType_DuringCheckout = 'DuringCheckout';
	const CodeType_None = 'None';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MinimumAdvertisedPriceExposureCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_MinimumAdvertisedPriceExposureCodeType = new MinimumAdvertisedPriceExposureCodeType();

?>
