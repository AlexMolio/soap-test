<?php

class Client
{
	public function __construct()
	{
		$params = array(//'location'=>'https://soap-test.000webhostapp.com/server.php',
						//'uri'=>'urn://soap-test.000webhostapp.com/server.php',
						'trace'=>1);
		//$this->instance = new SoapClient(NULL, $params);
		$this->instance = new SoapClient('https://soap-test.000webhostapp.com/soap-test.wsdl', $params);
	}

	public function getInfo($name)
	{
      
		return $this->instance->getFormInfo($name);
	}
	
	public function getInfoList()
	{
      
		return $this->instance->getFormInfoList();
	}
	
	public function getInfoById($id)
	{
      
		return $this->instance->getFormInfoById($id);
	}
	
	public function addInfo($name, $lastname, $date_of_birth)
	{
      
		return $this->instance->addFormInfo($name, $lastname, $date_of_birth);
	}
	
	public function editInfo($id, $name, $lastname, $date_of_birth)
	{
      
		return $this->instance->editFormInfo($id, $name, $lastname, $date_of_birth);
	}
}

//$client = new client;

?>