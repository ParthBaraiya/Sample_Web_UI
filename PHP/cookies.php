<?php
    if(!isset($_COOKIE["data"])){
        $name = "data";
        $value = $_REQUEST["isvisited"];
        $expire = time()+30*24*60*60;
        // echo "$expire";
        $path = "../";
        $domain = "sitemaker";

        setCookie($name,$value,$expire,$path,$domain);

        if(isset($_COOKIE["data"])){
            echo "true";
        } else {
            echo "false";
        }   
    } else {
        echo "set";
    }
?>