<?php
// autogenerated file 22.07.2011 10:16
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'SimpleItemType.php';

/**
 * Response to FindItems request. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FindItemsResponseType.html
 *
 */
class FindItemsResponseType extends AbstractResponseType
{
	/**
	 * @var SimpleItemType
	 */
	protected $Item;
	/**
	 * @var int
	 */
	protected $TotalItems;
	/**
	 * @var anyURI
	 */
	protected $ItemSearchURL;
	/**
	 * @var boolean
	 */
	protected $DuplicateItems;

	/**
	 * @return SimpleItemType
	 * @param integer $index 
	 */
	function getItem($index = null)
	{
		if ($index !== null) {
			return $this->Item[$index];
		} else {
			return $this->Item;
		}
	}
	/**
	 * @return void
	 * @param SimpleItemType $value 
	 * @param  $index 
	 */
	function setItem($value, $index = null)
	{
		if ($index !== null) {
			$this->Item[$index] = $value;
		} else {
			$this->Item = $value;
		}
	}
	/**
	 * @return void
	 * @param SimpleItemType $value 
	 */
	function addItem($value)
	{
		$this->Item[] = $value;
	}
	/**
	 * @return int
	 */
	function getTotalItems()
	{
		return $this->TotalItems;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalItems($value)
	{
		$this->TotalItems = $value;
	}
	/**
	 * @return anyURI
	 */
	function getItemSearchURL()
	{
		return $this->ItemSearchURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setItemSearchURL($value)
	{
		$this->ItemSearchURL = $value;
	}
	/**
	 * @return boolean
	 */
	function getDuplicateItems()
	{
		return $this->DuplicateItems;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDuplicateItems($value)
	{
		$this->DuplicateItems = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FindItemsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Item' =>
					array(
						'required' => false,
						'type' => 'SimpleItemType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'TotalItems' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemSearchURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DuplicateItems' =>
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
