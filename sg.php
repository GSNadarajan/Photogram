<?php
session_start();
print("_SESSION \n");
print_r($_SESSION);

print ("_SERVER\n");
?>
<pre>
    <?
print_r($_SERVER);
?><pre><?
// $a = 100;
if (isset($_GET['clear'])){
    session_unset();
}
if($a){
    print("A already exists, value:$a");
}
else{
    $a = time();
    print("Assigning new values,a =$a");
}

?>