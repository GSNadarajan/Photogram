<?php

function load_template($_name){
    include __DIR__."/../../_templates/$_name.php";
}


function validate_credentials($_username,$_password)
{
    // print("validate_credentials");
    if($_username = "nattu@gmail.com" and $_password="pass")
    {
        return true;
    }
    else{
        return false;
    }
}





?>
  