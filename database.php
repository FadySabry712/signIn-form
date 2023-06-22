<?php 


class dbh 
{
    private $DB_HOST;
    private $DB_USER;
    private $DB_PASS;
    private $DB_NAME;

    public function connect()
    {
        $this->DB_HOST = 'localhost';
        $this->DB_USER = 'fady';
        $this->DB_PASS = '123456';
        $this->DB_NAME = 'signin_form';

        $conn = new mysqli($this->DB_HOST, $this->DB_USER ,$this->DB_PASS, $this->DB_NAME); 

        if($conn->connect_error)
            {
              die('connection Failed' . $conn->connect_error);
            } 

        return $conn;

    }




}
?>