<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       $servername = "localhost";
$username = "root";
$password = "459717";
$dbname="words";
$fname=$_FILES["file"]["name"];
$fsize=($_FILES["file"]["size"]/1024);
move_uploaded_file($_FILES["file"]["tmp_name"], "C:/wamp64/www/net/" .$fname);
$fid=$_POST["fid"];
$conn = mysqli_connect($servername, $username, $password,$dbname);
 

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="INSERT INTO photo_table (p_name,p_size,p_date)
        VALUES ('$fname', $fsize,now())";
if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
    $url="http://localhost/net/webpage.php";
    echo " <script language = 'javascript' type = 'text/javascript'>";  

echo " window.location.href = '$url' ";  

echo " </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();


        ?>
    </body>
</html>
