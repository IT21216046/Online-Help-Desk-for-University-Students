<?php 

$host="localhost";
$user="root";
$password="";
$db="online-help-desk";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['u'])){
    
    $uname=$_POST['u'];
    $password=$_POST['p'];
    
    $sql="select * from sign-in where User='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>