
<?php
    $MYSQL_DBHOST='db-mysql';
    $MYSQL_DBUSER='root';
    $MYSQL_DBPASS='secret';
    $MYSQL_DBNAME = "empdb";

    #$MYSQL_DBHOST='db'
    #$MYSQL_ROOT_PASSWORD='root'
    #$MYSQL_DATABASE='empdb'
    #$MYSQL_USER='root'
    #$MYSQL_PASSWORD='root'
    $conn=mysqli_connect($MYSQL_DBHOST,$MYSQL_DBUSER,$MYSQL_DBPASS,"$MYSQL_DBNAME");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysqli_error());
        }
?>




