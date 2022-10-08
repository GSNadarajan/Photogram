<?php
 include 'assets/_libs/load.php';
 print basename($_SERVER['PHP_SELF'] ,".php");
// print basename($_SERVER['PHP_SELF'],'.php').".css"
//  echo __DIR__;
     




?>
  

<!doctype html>
 <html lang="en">
  
  <?=load_template("_head"); ?>
 <!-- <link href="css/signup.css" rel="stylesheet"> -->
 
  <body>
    

  
    <? load_template("_navbar");?>

    <? load_template("_signup"); ?>

    <? load_template("_footer"); ?>
    
    <? load_template("_script"); ?>
      
  </body>
</html>
