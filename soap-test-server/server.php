<?php 

    class server
    {
        private $con;

        public function __construct()

        {

            //$this->con = (is_null($this->con)) ? self::connect() : $this->con;
            if(is_null($this->con)){
                            $this->con = self::connect();
                        }

        }

        static function connect()
        {

            $connection = mysqli_connect('localhost', 'id6445701_root', 'Qq123456');
            $db = mysqli_select_db($connection, 'id6445701_soap_test');

            return $connection;

        }

        public function getFormInfo($names_array)

        {
            $answer = array('errors' => array(), 'info' => '');
            
            $name = $names_array['name'];
            
            if($name != strip_tags($name)){
                $answer['errors'][] = 'Думаешь можно просто так слать сюда тэги?!';
            } else {
            
            $sql = "SELECT * FROM forms WHERE name = '$name'";

            $qry = mysqli_query($this->con, $sql);
            //$res = mysqli_fetch_array($qry);
            
            
            for($i = 0; $i < mysqli_num_rows($qry); $i++){
            $res[] = mysqli_fetch_array($qry);
            }
            $answer['info'] = $res;
            }
            
            
            if(!isset($res)){
                $answer['errors'][] = 'Человека с таким именем в базе нет!';
            } 
            
            return $answer;
        }
        
        public function getFormInfoList($names_array)

        {
            
            $sql = "SELECT * FROM forms";

            $qry = mysqli_query($this->con, $sql);
            //$res = mysqli_fetch_array($qry);
            
            
            for($i = 0; $i < mysqli_num_rows($qry); $i++){
            $res[] = mysqli_fetch_array($qry);
            }
            
            
            $answer = array('info' => $res, 'errors' => array() );
            
            if(!isset($res)){
                $answer['errors'][] = 'База пуста!';
            } 
            
            return $answer;
        }
        
        public function getFormInfoById($info_array)

        {
            
            $id = $info_array['id'];
            $sql = "SELECT * FROM forms WHERE id = '$id'";

            $qry = mysqli_query($this->con, $sql);
            //$res = mysqli_fetch_array($qry);
            
            
            for($i = 0; $i < mysqli_num_rows($qry); $i++){
            $res[] = mysqli_fetch_array($qry);
            }
            
            
            $answer = array('info' => $res, 'errors' => array() );
            
            if(!isset($res)){
                $answer['errors'][] = 'Человека с таким именем в базе нет!';
            } 
            
            return $answer;
        }
        
        public function addFormInfo($names_array)

        {
            $answer = array('errors' => array(), 'info' => '');
            
            $name = $names_array['name'];
            
            $lastname = $names_array['lastname'];
            
            $date_of_birth = $names_array['date_of_birth'];
            
            if($name != strip_tags($name) || $lastname != strip_tags($lastname) || $date_of_birth != strip_tags($date_of_birth)){
                $answer['errors'][] = 'Думаешь можно просто так слать сюда тэги?!';
            } else {
            
            $sql = "INSERT INTO forms (name, lastname, date_of_birth) VALUES ('$name','$lastname','$date_of_birth')";

            $qry = mysqli_query($this->con, $sql);
            //$res = mysqli_fetch_array($qry);
            
            
            for($i = 0; $i < mysqli_num_rows($qry); $i++){
            $res[] = mysqli_fetch_array($qry);
            }
            
            $answer['info'] = $qry;
            
            }
            
            //$answer = array('info' => $res, 'errors' => array() );
            
            if(!isset($qry)){
                $answer['errors'][] = 'Данные не добавлены!';
            } 
            
            return $answer;
        }
        
        public function editFormInfo($info_array)

        {
            $answer = array('errors' => array(), 'info' => '');
            
            $id = $info_array['id'];
            
            $name = $info_array['name'];
            
            $lastname = $info_array['lastname'];
            
            $date_of_birth = $info_array['date_of_birth'];
            
            if($id != strip_tags($id) || $name != strip_tags($name) || $lastname != strip_tags($lastname) || $date_of_birth != strip_tags($date_of_birth)){
                $answer['errors'][] = 'Думаешь можно просто так слать сюда тэги?!';
            } else {
            
            $sql = "UPDATE forms SET name = '$name', lastname = '$lastname', date_of_birth = '$date_of_birth' WHERE id = '$id'";

            $qry = mysqli_query($this->con, $sql);
            //$res = mysqli_fetch_array($qry);
            
            
            for($i = 0; $i < mysqli_num_rows($qry); $i++){
            $res[] = mysqli_fetch_array($qry);
            }
            
            $answer['info'] = $qry;
            }
            
            if(!isset($qry)){
                $answer['errors'][] = 'Данные не обновлены!';
            } 
            
            return $answer;
        }
    }

    $params = array('uri'=>'localhost/server.php');

    $server = new SoapServer(NULL, $params);

    $server->setClass('server');

    $server->handle();

?>