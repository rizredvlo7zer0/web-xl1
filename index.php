<?php

include "controller/controller.php";

$main = new controller();
if(isset($_SERVER['PATH_INFO'])){
    
    if($_SERVER['PATH_INFO']=='/get_token'){
        include ("view/get_token.php");
    }
    else if($_SERVER['PATH_INFO']=='/beli_paket'){
        include ("view/beli_paket.php");
    }
    else{
        header("location: https://web.facebook.com/bantalku567");
    }
}
else{
   include ("view/otp.php");
}
?>
