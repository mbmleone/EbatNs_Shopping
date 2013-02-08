<?php
// autogenerated file 22.07.2011 10:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
 * Shipping costs and options related to an international shipping service. When 
 * usedas input, if one is provided, at least one domestic ShippingService must 
 * beprovided. This type does not exist before compatibility level 383. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/InternationalShippingServiceOptionType.html
 *
 */
class InternationalShippingServiceOptionType extends EbatNs_ComplexType
{
	/**
	 * @var AmountType
	 */
	protected $ShippingInsuranceCost;
	/**
	 * @var token
	 */
	protected $ShippingServiceName;
	/**
	 * @var AmountType
	 */
	protected $ShippingServiceAdditionalCost;
	/**
	 * @var AmountType
	 */
	protected $ShippingServiceCost;
	/**
	 * @var int
	 */
	protected $ShippingServicePriority;
	/**
	 * @var string
	 */
	protected $ShipsTo;

	/**
	 * @return AmountType
	 */
	function getShippingInsuranceCost()
	{
		return $this->ShippingInsuranceCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setShippingInsuranceCost($value)
	{
		$this->ShippingInsuranceCost = $value;
	}
	/**
	 * @return token
	 */
	function getShippingServiceName()
	{
		return $this->ShippingServiceName;
	}
	/**
	 * @return void
	 * @param token $value 
	 */
	function setShippingServiceName($value)
	{
		$this->ShippingServiceName = $value;
	}
	/**
	 * @return AmountType
	 */
	function getShippingServiceAdditionalCost()
	{
		return $this->ShippingServiceAdditionalCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setShippingServiceAdditionalCost($value)
	{
		$this->ShippingServiceAdditionalCost = $value;
	}
	/**
	 * @return AmountType
	 */
	function getShippingServiceCost()
	{
		return $this->ShippingServiceCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setShippingServiceCost($value)
	{
		$this->ShippingServiceCost = $value;
	}
	/**
	 * @return int
	 */
	function getShippingServicePriority()
	{
		return $this->ShippingServicePriority;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setShippingServicePriority($value)
	{
		$this->ShippingServicePriority = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getShipsTo($index = null)
	{
		if ($index !== null) {
			return $this->ShipsTo[$index];
		} else {
			return $this->ShipsTo;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setShipsTo($value, $index = null)
	{
		if ($index !== null) {
			$this->ShipsTo[$index] = $value;
		} else {
			$this->ShipsTo = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addShipsTo($value)
	{
		$this->ShipsTo[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('InternationalShippingServiceOptionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ShippingInsuranceCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingServiceName' =>
					array(
						'required' => false,
						'type' => 'token',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingServiceAdditionalCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingServiceCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingServicePriority' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShipsTo' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
