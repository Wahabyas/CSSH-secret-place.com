<?php
require_once "../controllers/config/connection.php";



class class_model{


    public $host = db_host;
    public $user = db_user;
    public $pass = db_pass;
    public $name = db_name;
    public $conn;
    public $error;

    public function __construct()
    {
        $this->connect();
    }

    private function connect(){
        $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->name);
        if(!$this->conn){
        $this->error= "Error on Connecting DB".$this->conn->connect_error;
        exit();
        }
    }

    public function user_login($username,$password){
        $stmt = $this->conn->prepare("SELECT * FROM user_tbl WHERE user_name =? AND `user_pass` = ?") or die($this->conn->error);
        $stmt->bind_param('ss',$username,$password);
        $stmt->execute();
        $value = $stmt->get_result();
        $count = $value->num_rows;
        $array = $value->fetch_array();
        if($value){
            return array(
                'name'=> $array['user_name']
            );
        }
    }
 

}
?>