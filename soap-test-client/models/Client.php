<?php

class Client
{
	public function __construct()
	{
		$params = array('location'=>'https://soap-test.000webhostapp.com/server.php',
						'uri'=>'urn://soap-test.000webhostapp.com/server.php',
						'trace'=>1);
		$this->instance = new SoapClient(NULL, $params);
	}

	public function getInfo($names_array)
	{
      
		return $this->instance->__soapCall('getFormInfo', $names_array);
	}
	
	public function getInfoList($names_array)
	{
      
		return $this->instance->__soapCall('getFormInfoList', $names_array);
	}
	
	public function getInfoById($names_array)
	{
      
		return $this->instance->__soapCall('getFormInfoById', $names_array);
	}
	
	public function addInfo($info_array)
	{
      
		return $this->instance->__soapCall('addFormInfo', $info_array);
	}
	
	public function editInfo($info_array)
	{
      
		return $this->instance->__soapCall('editFormInfo', $info_array);
	}
}

//$client = new client;

?>