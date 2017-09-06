<?php
$link=mysql_connect('127.0.0.1:3306',"root","1qaz@2wsx");
if($link!=false){
    echo"true";
}else{echo"false";}
 mysql_close();
phpinfo();
?>