<?php
// autogenerated file 15.11.2010 08:51
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * A product review written by an eBay member. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ReviewType.html
 *
 */
class ReviewType extends EbatNs_ComplexType
{
	/**
	 * @var anyURI
	 */
	protected $URL;
	/**
	 * @var string
	 */
	protected $Title;
	/**
	 * @var int
	 */
	protected $Rating;
	/**
	 * @var string
	 */
	protected $Text;
	/**
	 * @var string
	 */
	protected $UserID;
	/**
	 * @var dateTime
	 */
	protected $CreationTime;

	/**
	 * @return anyURI
	 */
	function getURL()
	{
		return $this->URL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setURL($value)
	{
		$this->URL = $value;
	}
	/**
	 * @return string
	 */
	function getTitle()
	{
		return $this->Title;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTitle($value)
	{
		$this->Title = $value;
	}
	/**
	 * @return int
	 */
	function getRating()
	{
		return $this->Rating;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setRating($value)
	{
		$this->Rating = $value;
	}
	/**
	 * @return string
	 */
	function getText()
	{
		return $this->Text;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setText($value)
	{
		$this->Text = $value;
	}
	/**
	 * @return string
	 */
	function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setUserID($value)
	{
		$this->UserID = $value;
	}
	/**
	 * @return dateTime
	 */
	function getCreationTime()
	{
		return $this->CreationTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setCreationTime($value)
	{
		$this->CreationTime = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ReviewType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'URL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Title' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Rating' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Text' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UserID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CreationTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
