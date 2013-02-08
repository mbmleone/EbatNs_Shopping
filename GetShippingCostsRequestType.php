<?php
// autogenerated file 15.11.2010 08:51
// $Id: $
// $Log: $
//
//
require_once 'CountryCodeType.php';
require_once 'AbstractRequestType.php';

/**
 * Gets shipping costs for an item. This is one of the ways a buyer or sellercan 
 * obtain shipping cost information for an existing item (for which the caller 
 * iseither the buyer or seller) at any point in the life of of the listing, before 
 * orafter a buyer has committed to purchasing the item(s). This call works forboth 
 * flat rate shipping and calculated shipping. Flat rate shipping costs 
 * areestablished by the seller before bidding occurs. Calculated shipping costsare 
 * calculated by eBay with its shipping partners based on postal code, but notethat 
 * insurance cost can only be determined once the final item price is knownwhen the 
 * listing ends. To determine whether a listing has ended, use GetSingleItem.It is 
 * best to call GetShippingCosts only after determining via GetSingleItemor 
 * FindItems that the item actually has shipping cost information. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetShippingCostsRequestType.html
 *
 */
class GetShippingCostsRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $ItemID;
	/**
	 * @var int
	 */
	protected $QuantitySold;
	/**
	 * @var string
	 */
	protected $DestinationPostalCode;
	/**
	 * @var CountryCodeType
	 */
	protected $DestinationCountryCode;
	/**
	 * @var boolean
	 */
	protected $IncludeDetails;

	/**
	 * @return string
	 */
	function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
	/**
	 * @return int
	 */
	function getQuantitySold()
	{
		return $this->QuantitySold;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setQuantitySold($value)
	{
		$this->QuantitySold = $value;
	}
	/**
	 * @return string
	 */
	function getDestinationPostalCode()
	{
		return $this->DestinationPostalCode;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDestinationPostalCode($value)
	{
		$this->DestinationPostalCode = $value;
	}
	/**
	 * @return CountryCodeType
	 */
	function getDestinationCountryCode()
	{
		return $this->DestinationCountryCode;
	}
	/**
	 * @return void
	 * @param CountryCodeType $value 
	 */
	function setDestinationCountryCode($value)
	{
		$this->DestinationCountryCode = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeDetails()
	{
		return $this->IncludeDetails;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeDetails($value)
	{
		$this->IncludeDetails = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetShippingCostsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QuantitySold' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DestinationPostalCode' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DestinationCountryCode' =>
					array(
						'required' => false,
						'type' => 'CountryCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeDetails' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
