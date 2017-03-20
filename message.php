<?php

 $servername = "localhost";
 $username = "id490774_ravi";
 $password = "ravi@iiit";
try {
    $conn = new PDO("mysql:host=$servername;dbname=id490774_message", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $email=$_POST['email'];
 $Name=$_POST['name'];
 $moblile=$_POST['mobile'];
 $message=$_POST["comment"];
$sql="Insert Into Comment values(?,?,?,?)";
$result=$conn->prepare($sql);
$result->execute([$Name,$email,$mobile,$message]);
if($result->rowCount()>0)
	echo "pass";
else
	echo "fail";
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>