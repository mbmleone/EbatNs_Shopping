<?php
// autogenerated file 15.11.2010 08:51
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Contains search word information, as it is related to a category. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PopularSearchesType.html
 *
 */
class PopularSearchesType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $CategoryID;
	/**
	 * @var string
	 */
	protected $CategoryParentID;
	/**
	 * @var string
	 */
	protected $QueryKeywords;
	/**
	 * @var string
	 */
	protected $AlternativeSearches;
	/**
	 * @var string
	 */
	protected $RelatedSearches;
	/**
	 * @var string
	 */
	protected $CategoryName;
	/**
	 * @var string
	 */
	protected $CategoryParentName;

	/**
	 * @return string
	 */
	function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}
	/**
	 * @return string
	 */
	function getCategoryParentID()
	{
		return $this->CategoryParentID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategoryParentID($value)
	{
		$this->CategoryParentID = $value;
	}
	/**
	 * @return string
	 */
	function getQueryKeywords()
	{
		return $this->QueryKeywords;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setQueryKeywords($value)
	{
		$this->QueryKeywords = $value;
	}
	/**
	 * @return string
	 */
	function getAlternativeSearches()
	{
		return $this->AlternativeSearches;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setAlternativeSearches($value)
	{
		$this->AlternativeSearches = $value;
	}
	/**
	 * @return string
	 */
	function getRelatedSearches()
	{
		return $this->RelatedSearches;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setRelatedSearches($value)
	{
		$this->RelatedSearches = $value;
	}
	/**
	 * @return string
	 */
	function getCategoryName()
	{
		return $this->CategoryName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategoryName($value)
	{
		$this->CategoryName = $value;
	}
	/**
	 * @return string
	 */
	function getCategoryParentName()
	{
		return $this->CategoryParentName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategoryParentName($value)
	{
		$this->CategoryParentName = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PopularSearchesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CategoryID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryParentID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QueryKeywords' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AlternativeSearches' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RelatedSearches' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryParentName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
