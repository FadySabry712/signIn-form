<?php 
include_once 'config/database.php';
?>

<?php
class userValidateSignIn
{
    private $data;
    private $errors = [];
    private static $fields = ['Sign-in-email', 'Sign-in-pwd'];

    public function __construct($post_data)
    {
        $this->data = $post_data;
    }

    public function validateForm ()
    {
        foreach(self::$fields as $field)
        {
            if(array_key_exists($field , $this->data))
            {
                trigger_error("$field can't be empty");
                return;
            }
        }
        $this->validateSigninemail();
        $this->validateSigninpwd();

        return $this->errors;
    }
    
    public function validateSigninemail()
    {
        $val = trim($this->data['Sign-in-email']);

        if(empty($val))
        {
            $this->addError('Sign-in-email', 'this field can not be emty');
        } else 
            {
                if(!preg_match('/^[A-Za-z0-9]{6,20}$/', $val))
                    {
                        $this->addError('Sign-in-email','enter a valid email');
                    }
             }
    }

    public function validateSigninpwd()
    {
        $val = trim($this->data['Sign-in-pwd']);

        if(empty($val))
        {
            $this->addError('Sign-in-pwd', 'this field can not be emty');
        } else 
            {
                if(!preg_match('/^[A-Za-z0-9]{6,20}$/', $val))
                    {
                        $this->addError('Sign-in-pwd','enter a valid password');
                    }
             }
    }


    public function addError($key, $val)
    {
        $this->errors[$key] = $val;
    }
}

class userValidate 
{
    private $data;
    private $errors = [];
    private static $fields = ['Name', 'Email', 'Password'];

    public function __construct($post_data)
    {
        $this->data = $post_data;
    }

    public function validateForm () 
    {
        foreach(self:: $fields as $field)
        {
            if(array_key_exists($field, $this->data))
            {
                trigger_error("$field cannot be empty");
                 return;
            }
        }
        $this->validateName();
        $this->validateEmail();
        $this->validatePassword();
      
        return $this->errors;
    }

    public function validateName() 
    {
        $val = trim($this->data['Name']);

        if(empty($val))
        {
            $this->addError('Name', 'Name field can not be empty');
        } else 
            {
                if(!preg_match('/^[A-Za-z0-9]{6,20}$/', $val))
                {
                    $this->addError('Name', 'Name must be between 6-20 characters and can not have any special characters' );
                }
            }
    }

    public function validateEmail() 
    {
        $val = trim($this->data['Email']);

        if(empty($val))
        {
            $this->addError('Email', 'Email field can not be empty');
        } else 
            {
                if(!preg_match('/^[A-Za-z0-9]{6,20}$/', $val))
                {
                    $this->addError('Email', 'enter a valid email' );
                }
            }
    }


    public function validatePassword() 
    {
        $val = trim($this->data['Password']);

        if(empty($val))
        {
            $this->addError('Password', 'Password field can not be empty');
        } else 
            {
                if(!preg_match('/^[A-Za-z0-9]{6,20}$/', $val))
                {
                    $this->addError('Password', 'Password must be between 6-20 characters and can not have any special characters' );
                }
            }
    }

    public function addError($key, $val)
    {
        $this->errors[$key] = $val;
    }
    
}

?>

<?php

class addData extends dbh 
{
    public function set_values ( $Name, $Email, $Password)
    {
      $conn = $this->connect();

        if(mysqli_query($conn, "INSERT INTO signup (name, email, password) VALUES ('$Name','$Email','$Password')"))
        {
         //true 
          header('location: ../sucessful.php');
          
        } 
       else 
      {
        //error
        echo 'Error:' . mysqli_error($conn);
      }
    }
}
?>
<?php
class addDataSignIn extends dbh 
{
        public function set_values_Signin ($Sign_in_email, $Sign_in_pwd)
        {
            $conn = $this->connect();

            if(mysqli_query($conn, "INSERT INTO signin (email, password) VALUES ('$Sign_in_email', '$Sign_in_pwd')"))
            {
                header('location: ../sucessful.php');
          
            } 
            else 
            {
             //error
             echo 'Error:' . mysqli_error($conn);
             }
            
        }
}
?>

