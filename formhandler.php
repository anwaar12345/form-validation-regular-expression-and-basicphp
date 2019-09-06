<?php

if(isset($_POST['submit'])){
   $uname = $_POST['uname'];
   $pass = $_POST['pass'];
if($uname !="" && $uname == $uname && $pass != "" && $pass == $pass){
    echo "Welcome MR <br>".$uname."your password is <br>".$pass;
}else{
    echo "enter info";
}

}
?>