<?php
// autogenerated file 29.12.2011 13:01
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The shipping cost model offered by the seller. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ShippingTypeCodeType.html
 *
 * @property string Flat
 * @property string Calculated
 * @property string Freight
 * @property string Free
 * @property string NotSpecified
 * @property string FlatDomesticCalculatedInternational
 * @property string CalculatedDomesticFlatInternational
 * @property string CustomCode
 */
class ShippingTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Flat = 'Flat';
	const CodeType_Calculated = 'Calculated';
	const CodeType_Freight = 'Freight';
	const CodeType_Free = 'Free';
	const CodeType_NotSpecified = 'NotSpecified';
	const CodeType_FlatDomesticCalculatedInternational = 'FlatDomesticCalculatedInternational';
	const CodeType_CalculatedDomesticFlatInternational = 'CalculatedDomesticFlatInternational';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ShippingTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ShippingTypeCodeType = new ShippingTypeCodeType();

?>
