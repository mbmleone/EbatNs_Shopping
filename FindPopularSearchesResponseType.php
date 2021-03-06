<?php
// autogenerated file 10.09.2012 13:13
// $Id: $
// $Log: $
//
//
require_once 'PopularSearchesType.php';
require_once 'AbstractResponseType.php';

/**
 * Contains the keyword data for the requested categories. A category's data are 
 * containedin a CategoryArrayType object if there is no error (one or more 
 * CategoryType objects).Returns category data as well as related search data. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FindPopularSearchesResponseType.html
 *
 */
class FindPopularSearchesResponseType extends AbstractResponseType
{
	/**
	 * @var PopularSearchesType
	 */
	protected $PopularSearchResult;
	/**
	 * @var int
	 */
	protected $PageNumber;
	/**
	 * @var int
	 */
	protected $TotalPages;

	/**
	 * @return PopularSearchesType
	 * @param integer $index 
	 */
	function getPopularSearchResult($index = null)
	{
		if ($index !== null) {
			return $this->PopularSearchResult[$index];
		} else {
			return $this->PopularSearchResult;
		}
	}
	/**
	 * @return void
	 * @param PopularSearchesType $value 
	 * @param  $index 
	 */
	function setPopularSearchResult($value, $index = null)
	{
		if ($index !== null) {
			$this->PopularSearchResult[$index] = $value;
		} else {
			$this->PopularSearchResult = $value;
		}
	}
	/**
	 * @return void
	 * @param PopularSearchesType $value 
	 */
	function addPopularSearchResult($value)
	{
		$this->PopularSearchResult[] = $value;
	}
	/**
	 * @return int
	 */
	function getPageNumber()
	{
		return $this->PageNumber;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPageNumber($value)
	{
		$this->PageNumber = $value;
	}
	/**
	 * @return int
	 */
	function getTotalPages()
	{
		return $this->TotalPages;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalPages($value)
	{
		$this->TotalPages = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FindPopularSearchesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PopularSearchResult' =>
					array(
						'required' => false,
						'type' => 'PopularSearchesType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'PageNumber' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalPages' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
