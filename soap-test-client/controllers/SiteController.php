<?php

class SiteController
{
    public function actionIndex()
    {

		$client = new Client;

    	$names_array = array('params' => array('name' => ''));
    	    
    	$answer = $client->getInfoList($names_array);
    	    
    	$person = $answer['info']; 

        require_once (ROOT . '/views/site/index.php');

        return true;
    }

    public function actionAnswer()
    {
        

		if(isset($_POST['submit'])) {

			$subject = $_POST['name'];
			
			$client = new Client;

    	    $names_array = array('params' => array('name' => ''));
    	    
    	    $names_array['params']['name'] = $subject;
    	    
    	    $answer = $client->getInfo($names_array);
    	    
    	    $person = $answer['info']; 
    	    
    	    
    	    
    	    
		}


    	require_once (ROOT . '/views/site/answer.php');

    

    	return true;
    }
    
    public function actionAdd()
    {
        $answer = false;

		if(isset($_POST['submit'])) {

			$name = $_POST['name'];
			
			$lastname = $_POST['lastname'];
			
			$date_of_birth = $_POST['date_of_birth'];
			
			$client = new Client;

    	    $names_array = array('params' => array('name' => '', 'lastname' => '', 'date_of_birth' => ''));
    	    
    	    $names_array['params']['name'] = $name;
    	    
    	    $names_array['params']['lastname'] = $lastname;
    	    
    	    $names_array['params']['date_of_birth'] = $date_of_birth;
    	    
    	    $answer = $client->addInfo($names_array);
    	      
		}


    	require_once (ROOT . '/views/site/addinfo.php');

    

    	return true;
    }
    
    public function actionEdit($id)
    {
        $answer = false;
        
        $client = new Client;

        $names_array = array('params' => array('id' => ''));
        	    
        $names_array['params']['id'] = $id;
        	    
        $info = $client->getInfoById($names_array);
        	    
        $person = $info['info'];

		if(isset($_POST['submit'])) {

			$name = $_POST['name'];
			
			$lastname = $_POST['lastname'];
			
			$date_of_birth = $_POST['date_of_birth'];
			
			$client = new Client;

    	    $names_array = array('params' => array('name' => '', 'lastname' => '', 'date_of_birth' => ''));
    	    
    	    $names_array['params']['id'] = $id;
    	    
    	    $names_array['params']['name'] = $name;
    	    
    	    $names_array['params']['lastname'] = $lastname;
    	    
    	    $names_array['params']['date_of_birth'] = $date_of_birth;
    	    
    	    $answer = $client->editInfo($names_array);
    	    
    	    //var_dump($answer);
    	    
		}


    	require_once (ROOT . '/views/site/editinfo.php');

    

    	return true;
    }
}

?>