<?php
// autogenerated file 15.11.2010 08:54
// $Id: $
// $Log: $
//
//
require_once 'ErrorType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'AckCodeType.php';

/**
 * Base type definition of a response payload that can carry anytype of payload 
 * content with following optional elements:<br>- timestamp of response 
 * message<br>- application-level acknowledgement<br>- application-level 
 * (business-level) errors and warnings 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AbstractResponseType.html
 *
 */
class AbstractResponseType extends EbatNs_ComplexType
{
	/**
	 * @var dateTime
	 */
	protected $Timestamp;
	/**
	 * @var AckCodeType
	 */
	protected $Ack;
	/**
	 * @var ErrorType
	 */
	protected $Errors;
	/**
	 * @var string
	 */
	protected $Build;
	/**
	 * @var string
	 */
	protected $Version;
	/**
	 * @var string
	 */
	protected $CorrelationID;

	/**
	 * @return dateTime
	 */
	function getTimestamp()
	{
		return $this->Timestamp;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setTimestamp($value)
	{
		$this->Timestamp = $value;
	}
	/**
	 * @return AckCodeType
	 */
	function getAck()
	{
		return $this->Ack;
	}
	/**
	 * @return void
	 * @param AckCodeType $value 
	 */
	function setAck($value)
	{
		$this->Ack = $value;
	}
	/**
	 * @return ErrorType
	 * @param integer $index 
	 */
	function getErrors($index = null)
	{
		if ($index !== null) {
			return $this->Errors[$index];
		} else {
			return $this->Errors;
		}
	}
	/**
	 * @return void
	 * @param ErrorType $value 
	 * @param  $index 
	 */
	function setErrors($value, $index = null)
	{
		if ($index !== null) {
			$this->Errors[$index] = $value;
		} else {
			$this->Errors = $value;
		}
	}
	/**
	 * @return void
	 * @param ErrorType $value 
	 */
	function addErrors($value)
	{
		$this->Errors[] = $value;
	}
	/**
	 * @return string
	 */
	function getBuild()
	{
		return $this->Build;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setBuild($value)
	{
		$this->Build = $value;
	}
	/**
	 * @return string
	 */
	function getVersion()
	{
		return $this->Version;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setVersion($value)
	{
		$this->Version = $value;
	}
	/**
	 * @return string
	 */
	function getCorrelationID()
	{
		return $this->CorrelationID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCorrelationID($value)
	{
		$this->CorrelationID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AbstractResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Timestamp' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Ack' =>
					array(
						'required' => false,
						'type' => 'AckCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Errors' =>
					array(
						'required' => false,
						'type' => 'ErrorType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'Build' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Version' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CorrelationID' =>
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
