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
$dbname="chat";
$Uname=$_POST["email"];
$Upassword=$_POST["pwd"];
$ename;


$conn = mysqli_connect($servername, $username, $password,$dbname);
 

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT userid,password,name from chat_users";
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        
        if($row["userid"]!==$Uname||$row["password"]!==$Upassword){
        
            echo 'you put in username or password is error';
        } else {
            $ename=$row["name"];
             $url="newhtml1.html?name=$ename";  

echo " <script language = 'javascript' type = 'text/javascript'>";  

echo " window.location.href = '$url' ";  

echo " </script>"; 
        }
       
    }
} else {
    echo "0 缁撴灉";
}
$conn->close();


        ?>
        
    </body>
</html>
