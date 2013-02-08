<?php
// autogenerated file 29.12.2011 13:01
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * ProductID type for product searches. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ProductIDCodeType.html
 *
 * @property string ISBN
 * @property string EAN
 * @property string UPC
 * @property string MPN
 * @property string Keywords
 * @property string CatalogItem
 * @property string Reference
 * @property string CustomCode
 */
class ProductIDCodeType extends EbatNs_FacetType
{
	const CodeType_ISBN = 'ISBN';
	const CodeType_EAN = 'EAN';
	const CodeType_UPC = 'UPC';
	const CodeType_MPN = 'MPN';
	const CodeType_Keywords = 'Keywords';
	const CodeType_CatalogItem = 'CatalogItem';
	const CodeType_Reference = 'Reference';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ProductIDCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ProductIDCodeType = new ProductIDCodeType();

?>
