<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GeteBayTimeRequestType.php';
require_once 'EbatNs_EnvironmentShopping.php';

/**
 * sampleshopping_GeteBayTime
 * 
 * Sample call for GeteBayTime
 * 
 * @package ebatns
 * @subpackage samples_shopping
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sampleshopping_GeteBayTime.php,v 1.58 2010-11-15 07:54:42 michael Exp $
 * @access public 
 */
class sample_GeteBayTime extends EbatNs_EnvironmentShopping
{

    /**
     * sampleshopping_GeteBayTime::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new GeteBayTimeRequestType();
		
        $res = $this->proxy->GeteBayTime($req);
        if ($this->testValid($res))
        {
            $this->dumpObject($res);
            return (true);
        }
        else 
        {
            return (false);
        }
    }
}

$x = new sample_GeteBayTime();
$x->dispatchCall(array());

?>