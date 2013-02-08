<?php
// autogenerated file 29.12.2011 13:30
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Find popular items 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FindPopularItemsRequestType.html
 *
 */
class FindPopularItemsRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $CategoryID;
	/**
	 * @var string
	 */
	protected $QueryKeywords;
	/**
	 * @var string
	 */
	protected $CategoryIDExclude;
	/**
	 * @var int
	 */
	protected $MaxEntries;

	/**
	 * @return string
	 * @param integer $index 
	 */
	function getCategoryID($index = null)
	{
		if ($index !== null) {
			return $this->CategoryID[$index];
		} else {
			return $this->CategoryID;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setCategoryID($value, $index = null)
	{
		if ($index !== null) {
			$this->CategoryID[$index] = $value;
		} else {
			$this->CategoryID = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addCategoryID($value)
	{
		$this->CategoryID[] = $value;
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
	 * @param integer $index 
	 */
	function getCategoryIDExclude($index = null)
	{
		if ($index !== null) {
			return $this->CategoryIDExclude[$index];
		} else {
			return $this->CategoryIDExclude;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setCategoryIDExclude($value, $index = null)
	{
		if ($index !== null) {
			$this->CategoryIDExclude[$index] = $value;
		} else {
			$this->CategoryIDExclude = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addCategoryIDExclude($value)
	{
		$this->CategoryIDExclude[] = $value;
	}
	/**
	 * @return int
	 */
	function getMaxEntries()
	{
		return $this->MaxEntries;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxEntries($value)
	{
		$this->MaxEntries = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FindPopularItemsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CategoryID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'QueryKeywords' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryIDExclude' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'MaxEntries' =>
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
