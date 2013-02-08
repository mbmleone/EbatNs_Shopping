<?php
// autogenerated file 22.07.2011 10:19
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * The Timestamp field indicates the official eBay system time in GMT.The value 
 * returned represents the date and time when eBay processed the request.The value 
 * is in the ISO 8601 date-time format (YYYY-MM-DDTHH:MM:SS.SSSZ). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GeteBayTimeResponseType.html
 *
 */
class GeteBayTimeResponseType extends AbstractResponseType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GeteBayTimeResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
