<?php
$firstname = $_REQUEST['firstname']; 
$lastname = $_REQUEST['lastname']; 
$address= $_REQUEST['Address']; 
$phone = $_REQUEST['phone']; 

if(isset($_POST['btn'])){

    $host = "localhost";
    $user = "root";
    $password ="";
    $db = "coffee truck";
    $connect = mysqli_connect($host,$user,$password,$db);
$insert="insert into trucks values('$firstname','$lastname','$address','$phone')";
mysqli_query($connect,$insert);

if($connect){
    echo("<h1 style='color:green;'> Your submit is Done!</h1>");
}
else{
    echo("<h1 style='color:red;'> Your submit is Failed❌</h1>");
}
}

?>