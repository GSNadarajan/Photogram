<?php
 include 'assets/_libs/load.php';
// include 'assets/_libs/includes/database.class.php';
// include 'dummy.php';

// print basename($_SERVER['PHP_SELF'],'.php').".css"
 echo __DIR__;
     



?>
  

<!doctype html>
 <html lang="en">
  
  <?=load_template("_head"); ?>
 
  <body>
    

  
    <? load_template("_navbar");?>

    <? load_template("_login"); ?>

    <? load_template("_footer"); ?>
    
    <? load_template("_script"); ?>
      
  </body>
</html>
