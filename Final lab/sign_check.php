<?php
if (isset($_REQUEST['submit']))
{
    $username_i = $_REQUEST['username'];
    $email_i = $_REQUEST['email'];
    $password_i = $_REQUEST['password'];

    $localhost = '127.0.0.1';
    $username= 'root';
    $password = '';
    $dbname = 'data';
    
    function getconnection ()
    {
           global $localhost;
           global  $username;
           global $password ;
           global $dbname ;
           return mysqli_connect($localhost,$username,$password,$dbname);
    }
    $con = getconnection();
  

   function add($data)
{
    $con= getconnection();
    $sql = "insert into auth values('{$data['username']}','{$data['email']}','{$data['password']}')";
    $status = mysqli_query($con,$sql);
    return $status;
}
    $info = ['username'=>$username_i,'email'=>$email_i, 'password'=>$password_i];
    add($info);
    echo "signin successful";
}
?>