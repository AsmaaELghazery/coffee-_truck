<?php
$name = $_REQUEST['name']; 
$email = $_REQUEST['email']; 
$address= $_REQUEST['message']; 
 

if(isset($_POST['btn'])){

    $host = "localhost";
    $user = "root";
    $password ="";
    $db = "coffee truck";
    $connect = mysqli_connect($host,$user,$password,$db);
$insert="insert into users values('$name','$email','$address')";
mysqli_query($connect,$insert);

if($connect){
    echo("<h1 style='color:green;'> Your message is Done!</h1>");
}
else{
    echo("<h1 style='color:red;'> Your message is Failed❌</h1>");
}
}

?>