<?php
// autogenerated file 10.09.2012 13:13
// $Id: $
// $Log: $
//
//
require_once 'HistogramEntryType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * A generic type used for histograms. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DomainHistogramType.html
 *
 */
class DomainHistogramType extends EbatNs_ComplexType
{
	/**
	 * @var HistogramEntryType
	 */
	protected $Domain;

	/**
	 * @return HistogramEntryType
	 * @param integer $index 
	 */
	function getDomain($index = null)
	{
		if ($index !== null) {
			return $this->Domain[$index];
		} else {
			return $this->Domain;
		}
	}
	/**
	 * @return void
	 * @param HistogramEntryType $value 
	 * @param  $index 
	 */
	function setDomain($value, $index = null)
	{
		if ($index !== null) {
			$this->Domain[$index] = $value;
		} else {
			$this->Domain = $value;
		}
	}
	/**
	 * @return void
	 * @param HistogramEntryType $value 
	 */
	function addDomain($value)
	{
		$this->Domain[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DomainHistogramType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Domain' =>
					array(
						'required' => false,
						'type' => 'HistogramEntryType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
