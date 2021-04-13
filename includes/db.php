<?php 
// Creating an object to contain our database values 
 $db['db_host'] = "localhost:8889";
 $db['db_user'] = "root";
 $db['db_pass'] = "root";
 $db['db_name'] = "bootstrap_cms";
 // Same as creating $db = [{db_host: localhost:8888},{db_user: root}....] or individual variables

 
 foreach($db as $key => $value) {
    define(strtoupper($key), $value);
 }

 $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

 if(!$connection){
     echo mysqli_error($connection);
 }

?>