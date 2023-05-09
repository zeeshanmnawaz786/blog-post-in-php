<?php

define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","login_system");

$conn = new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE);

if(!$conn){
    echo "Connection failed";
}
?>