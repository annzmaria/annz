<?php
ob_start();
if(isset($_POST['submit'])){
var_dump($_POST);
echo $_POST['Name'];
}
else{
    echo "fail";
}
?>