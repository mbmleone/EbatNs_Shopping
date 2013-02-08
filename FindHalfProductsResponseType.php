<?php
// autogenerated file 18.03.2011 12:14
// $Id: $
// $Log: $
//
//
require_once 'DomainHistogramType.php';
require_once 'HalfProductsType.php';
require_once 'AbstractResponseType.php';

/**
 * Returns stock product information in Half.com catalogs, such asinformation about 
 * a particular DVD or book. Optionally,also returns items that match the product. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FindHalfProductsResponseType.html
 *
 */
class FindHalfProductsResponseType extends AbstractResponseType
{
	/**
	 * @var DomainHistogramType
	 */
	protected $DomainHistogram;
	/**
	 * @var int
	 */
	protected $PageNumber;
	/**
	 * @var int
	 */
	protected $ApproximatePages;
	/**
	 * @var boolean
	 */
	protected $MoreResults;
	/**
	 * @var int
	 */
	protected $TotalProducts;
	/**
	 * @var HalfProductsType
	 */
	protected $Products;
	/**
	 * @var anyURI
	 */
	protected $ProductSearchURL;

	/**
	 * @return DomainHistogramType
	 */
	function getDomainHistogram()
	{
		return $this->DomainHistogram;
	}
	/**
	 * @return void
	 * @param DomainHistogramType $value 
	 */
	function setDomainHistogram($value)
	{
		$this->DomainHistogram = $value;
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
	function getApproximatePages()
	{
		return $this->ApproximatePages;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setApproximatePages($value)
	{
		$this->ApproximatePages = $value;
	}
	/**
	 * @return boolean
	 */
	function getMoreResults()
	{
		return $this->MoreResults;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setMoreResults($value)
	{
		$this->MoreResults = $value;
	}
	/**
	 * @return int
	 */
	function getTotalProducts()
	{
		return $this->TotalProducts;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalProducts($value)
	{
		$this->TotalProducts = $value;
	}
	/**
	 * @return HalfProductsType
	 */
	function getProducts()
	{
		return $this->Products;
	}
	/**
	 * @return void
	 * @param HalfProductsType $value 
	 */
	function setProducts($value)
	{
		$this->Products = $value;
	}
	/**
	 * @return anyURI
	 */
	function getProductSearchURL()
	{
		return $this->ProductSearchURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setProductSearchURL($value)
	{
		$this->ProductSearchURL = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FindHalfProductsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DomainHistogram' =>
					array(
						'required' => false,
						'type' => 'DomainHistogramType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PageNumber' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ApproximatePages' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MoreResults' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalProducts' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Products' =>
					array(
						'required' => false,
						'type' => 'HalfProductsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProductSearchURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
