<?php
// autogenerated file 18.03.2011 12:14
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ProductStateCodeType.php';
require_once 'NameValueListArrayType.php';
require_once 'ProductIDType.php';

/**
 * Information about an eBay catalog product. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CatalogProductType.html
 *
 */
class CatalogProductType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $DomainName;
	/**
	 * @var anyURI
	 */
	protected $DetailsURL;
	/**
	 * @var boolean
	 */
	protected $DisplayStockPhotos;
	/**
	 * @var ProductIDType
	 */
	protected $ProductID;
	/**
	 * @var int
	 */
	protected $ItemCount;
	/**
	 * @var NameValueListArrayType
	 */
	protected $ItemSpecifics;
	/**
	 * @var int
	 */
	protected $ReviewCount;
	/**
	 * @var anyURI
	 */
	protected $StockPhotoURL;
	/**
	 * @var string
	 */
	protected $Title;
	/**
	 * @var ProductStateCodeType
	 */
	protected $ProductState;

	/**
	 * @return string
	 */
	function getDomainName()
	{
		return $this->DomainName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDomainName($value)
	{
		$this->DomainName = $value;
	}
	/**
	 * @return anyURI
	 */
	function getDetailsURL()
	{
		return $this->DetailsURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setDetailsURL($value)
	{
		$this->DetailsURL = $value;
	}
	/**
	 * @return boolean
	 */
	function getDisplayStockPhotos()
	{
		return $this->DisplayStockPhotos;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDisplayStockPhotos($value)
	{
		$this->DisplayStockPhotos = $value;
	}
	/**
	 * @return ProductIDType
	 * @param integer $index 
	 */
	function getProductID($index = null)
	{
		if ($index !== null) {
			return $this->ProductID[$index];
		} else {
			return $this->ProductID;
		}
	}
	/**
	 * @return void
	 * @param ProductIDType $value 
	 * @param  $index 
	 */
	function setProductID($value, $index = null)
	{
		if ($index !== null) {
			$this->ProductID[$index] = $value;
		} else {
			$this->ProductID = $value;
		}
	}
	/**
	 * @return void
	 * @param ProductIDType $value 
	 */
	function addProductID($value)
	{
		$this->ProductID[] = $value;
	}
	/**
	 * @return int
	 */
	function getItemCount()
	{
		return $this->ItemCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setItemCount($value)
	{
		$this->ItemCount = $value;
	}
	/**
	 * @return NameValueListArrayType
	 */
	function getItemSpecifics()
	{
		return $this->ItemSpecifics;
	}
	/**
	 * @return void
	 * @param NameValueListArrayType $value 
	 */
	function setItemSpecifics($value)
	{
		$this->ItemSpecifics = $value;
	}
	/**
	 * @return int
	 */
	function getReviewCount()
	{
		return $this->ReviewCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setReviewCount($value)
	{
		$this->ReviewCount = $value;
	}
	/**
	 * @return anyURI
	 */
	function getStockPhotoURL()
	{
		return $this->StockPhotoURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setStockPhotoURL($value)
	{
		$this->StockPhotoURL = $value;
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
	 * @return ProductStateCodeType
	 */
	function getProductState()
	{
		return $this->ProductState;
	}
	/**
	 * @return void
	 * @param ProductStateCodeType $value 
	 */
	function setProductState($value)
	{
		$this->ProductState = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CatalogProductType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DomainName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DetailsURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DisplayStockPhotos' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProductID' =>
					array(
						'required' => false,
						'type' => 'ProductIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'ItemCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemSpecifics' =>
					array(
						'required' => false,
						'type' => 'NameValueListArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReviewCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StockPhotoURL' =>
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
					'ProductState' =>
					array(
						'required' => false,
						'type' => 'ProductStateCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
