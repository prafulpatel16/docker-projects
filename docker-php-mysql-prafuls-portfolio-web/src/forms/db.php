<?php
    $MYSQL_DBHOST='mysql';
    $MYSQL_DBUSER='root';
    $MYSQL_DBPASS='secret';
    $MYSQL_DBNAME = "empdb";
    $conn=mysqli_connect($MYSQL_DBHOST,$MYSQL_DBUSER,$MYSQL_DBPASS,"$MYSQL_DBNAME");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysqli_error());
        }
?>




