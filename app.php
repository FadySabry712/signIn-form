<?php 

include_once 'config/database.php';
include_once 'config/sereverside.php';



$Name = $Email = $Password = '';

if(isset($_POST['submit']))
{
    $Name = filter_input(INPUT_POST, 'Name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Password = filter_input(INPUT_POST, 'Password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);


    $insert = new addData(); 
    if(!empty($Name) && !empty($Email) && !empty($Password))
        {
            $insert->set_values($Name, $Email, $Password);
        }
}
?>

<?php

$Sign_in_email = $Sign_in_pwd = '';

if(isset($_POST['submitSignin']))
{
    $Sign_in_email = filter_input(INPUT_POST, 'Sign_in_email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Sign_in_pwd = filter_input(INPUT_POST, 'Sign_in_pwd', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $insert_Signin = new addDataSignIn();
    if(!empty($Sign_in_email) && !empty($Sign_in_pwd))
    {
        $insert_Signin->set_values_Signin($Sign_in_email, $Sign_in_pwd);
    }
}

?>
