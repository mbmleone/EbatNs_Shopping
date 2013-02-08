<?php
// autogenerated file 22.07.2011 10:16
// $Id: $
// $Log: $
//
//
require_once 'SimpleItemSortCodeType.php';
require_once 'SortOrderCodeType.php';
require_once 'AbstractRequestType.php';

/**
 * Searches for items based on a query or seller ID.If you use keywords, this call 
 * returns items that contain the keywords in the title.A maximum of 50 items is 
 * returned.<br><br>If you are not using the BestMatch search option, the API 
 * search results may not match the search results returned by the eBay website. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FindItemsRequestType.html
 *
 */
class FindItemsRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $QueryKeywords;
	/**
	 * @var SimpleItemSortCodeType
	 */
	protected $ItemSort;
	/**
	 * @var SortOrderCodeType
	 */
	protected $SortOrder;
	/**
	 * @var int
	 */
	protected $MaxEntries;
	/**
	 * @var string
	 */
	protected $PostalCode;
	/**
	 * @var string
	 */
	protected $SellerID;
	/**
	 * @var string
	 */
	protected $SellerIDExclude;
	/**
	 * @var boolean
	 */
	protected $HideDuplicateItems;

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
	 * @return SimpleItemSortCodeType
	 */
	function getItemSort()
	{
		return $this->ItemSort;
	}
	/**
	 * @return void
	 * @param SimpleItemSortCodeType $value 
	 */
	function setItemSort($value)
	{
		$this->ItemSort = $value;
	}
	/**
	 * @return SortOrderCodeType
	 */
	function getSortOrder()
	{
		return $this->SortOrder;
	}
	/**
	 * @return void
	 * @param SortOrderCodeType $value 
	 */
	function setSortOrder($value)
	{
		$this->SortOrder = $value;
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
	 * @return string
	 */
	function getPostalCode()
	{
		return $this->PostalCode;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPostalCode($value)
	{
		$this->PostalCode = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getSellerID($index = null)
	{
		if ($index !== null) {
			return $this->SellerID[$index];
		} else {
			return $this->SellerID;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setSellerID($value, $index = null)
	{
		if ($index !== null) {
			$this->SellerID[$index] = $value;
		} else {
			$this->SellerID = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addSellerID($value)
	{
		$this->SellerID[] = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getSellerIDExclude($index = null)
	{
		if ($index !== null) {
			return $this->SellerIDExclude[$index];
		} else {
			return $this->SellerIDExclude;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setSellerIDExclude($value, $index = null)
	{
		if ($index !== null) {
			$this->SellerIDExclude[$index] = $value;
		} else {
			$this->SellerIDExclude = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addSellerIDExclude($value)
	{
		$this->SellerIDExclude[] = $value;
	}
	/**
	 * @return boolean
	 */
	function getHideDuplicateItems()
	{
		return $this->HideDuplicateItems;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setHideDuplicateItems($value)
	{
		$this->HideDuplicateItems = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FindItemsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'QueryKeywords' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemSort' =>
					array(
						'required' => false,
						'type' => 'SimpleItemSortCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SortOrder' =>
					array(
						'required' => false,
						'type' => 'SortOrderCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaxEntries' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PostalCode' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'SellerIDExclude' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'HideDuplicateItems' =>
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
