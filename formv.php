
<?php
$ername="";
$eremail="";
$ergender="";
$erwebsite="";
$ercom="";
 if(isset($_POST['submit']))
{
    if(empty($_POST['name'])){
        $ername ="name is required";
    }else{
        $name = test_u_input($_POST['name']);
        if(!preg_match(" /^([a-zA-Z' ]+)$/ ",$name)){
            $ername="only letters and white spaces allowed";
        }
    }
//email
if(empty($_POST['email'])){
    $eremail ="email is required";
}else{

    $email = test_u_input($_POST['email']);
    if(!preg_match(" /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix" , $email)){
        $eremail ="invalid enter email like example@example.com";
    }
}
//gender
if(empty($_POST['gender'])){
    $ergender ="gender is required";
}else{
$gender = test_u_input($_POST['gender']);
}
// website

if(empty($_POST['website'])){
    $erwebsite ="website is required";
}else{
$web = test_u_input($_POST['website']);
if(!preg_match('#^(ht|f)tps?://#', $web)){
    $erwebsite ="wrong url";
}
}
//comments
if(empty($_POST['comment'])){
    $ercom = "enter your comments";
}else{
    $com = test_u_input($_POST['comment']);
}

if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['gender']) && !empty($_POST['website']) && !empty($_POST['comment']))
{
if( preg_match(" /^([a-zA-Z' ]+)$/ ",$name) == true && preg_match(" /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix" , $email) == true && preg_match('#^(ht|f)tps?://#', $web) == true ){
echo "<h2>you entered info</h2><br>";
echo "<h4>Name :{$_POST['name']} </h4><br>";
echo "<h4>Email :{$_POST['email']} </h4><br>";
echo "<h4>Gender: {$_POST['gender']} </h4><br>";
echo "<h4>website: {$_POST['website']} </h4><br>";
echo "<h4>comments: {$_POST['comment']} </h4><br>";
}else{
        echo "<span>fill form properly</span>";
}
}


}

function  test_u_input($data){
    return $data;       
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>
</head>
<style>
input[type="text"],input[type="email"],textarea{
    border: solid dashed 1px red;
    background:linear-gradient(white,silver);
    width:800px;
    padding:15px;
    margin:5px;
}
span{
    color:red;
    
}

</style>
<body>
<form action="" method="POST" >
   name:<br>
  <input type="text" name="name"><span> * <?php echo $ername; ?></span>    
  <br>
   email:<br>
  <input type="text" name="email"> <span> * <?php echo $eremail; ?></span>
  <br>
   Gender:<br> <br>
  <input type="radio" name="gender" value="male" > Male
  <input type="radio" name="gender" value="female" > Female  <span> * <?php echo $ergender; ?></span> 
 
  <br><br>
  
  Website:<br>
  <input type="text" name="website"> <span> * <?php echo $erwebsite;?></span>
<br>  
  comment:<br>
  <textarea  name="comment" cols="25" rows="5"></textarea> <span><?php echo $ercom; ?></span> 
  <br>
  <input type="submit" name="submit" value="submit">
</form> 
</body>
</html>
