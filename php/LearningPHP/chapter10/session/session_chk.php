<?php
session_start();
?>

<html>
<?php
    foreach($_SESSION['colors'] as $v){
        print $v.' ';
    }
?>
</html>
