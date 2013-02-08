<?php
// autogenerated file 29.12.2011 13:01
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Contains the data for one type of feedback for one predefined timeperiod. Parent 
 * FeedbackPeriodArrayType object indicates the type offeedback counted: positive, 
 * neutral, negative, or total. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FeedbackPeriodType.html
 *
 */
class FeedbackPeriodType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $PeriodInDays;
	/**
	 * @var long
	 */
	protected $Count;

	/**
	 * @return int
	 */
	function getPeriodInDays()
	{
		return $this->PeriodInDays;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPeriodInDays($value)
	{
		$this->PeriodInDays = $value;
	}
	/**
	 * @return long
	 */
	function getCount()
	{
		return $this->Count;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setCount($value)
	{
		$this->Count = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FeedbackPeriodType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PeriodInDays' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Count' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
