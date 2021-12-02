<?php
//Create connection with the DB
$host = "localhost";
$DBusername = "root";
$DBpassword = "";
$databaseName = "webbug";
$conn = mysqli_connect($host,$DBusername,$DBpassword,$databaseName);
if ( mysqli_connect_errno()){
    die("Can't connect to the Database you can't use this app".mysqli_connect_errno());
}

//get the clint ip address
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

//get the full url that the clint used
if(!empty($_SERVER['HTTP_REFERER'])){
    $url =  $_SERVER['HTTP_REFERER'];
}elseif(!empty($_SERVER['HTTP_HOST']) && !empty($_SERVER['PHP_SELF'])){
        $url =  $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
}

//get time of the request
$date = date('Y/m/d h:i:s', time());

//insert data to the DB
$insertQuery = "INSERT INTO `user` (`time`, `ip`, `url`) VALUES('$date', '$ip', '$url')";
$result = mysqli_query($conn,$insertQuery);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project 2, Page 2</title>
</head>
<body>
<h2>Project 2, Page 2</h2>
<img height="50" width="50" src="20210120.jpg" /><br>
<h1>All Users who viewed the img </h1>
<table border="1">
<tr>
<th>Time</th>
<th>IP</th>
<th>URL</th>
</tr>
<?php
//Get all the users from DB
$query = "Select * from user";
if($result =  mysqli_query($conn,$query)){
    while ($row = mysqli_fetch_assoc($result)){
        $time = $row['time'];
        $ip = $row['ip'];
        $url = $row['url'];
        
        echo "<tr>";
        echo    "<td>".$time."</td>";
        echo    "<td>".$ip."</td>";
        echo    "<td>".$url."</td>";
        echo "</tr>";
    }
}
?>
<h4>Click the button to go to the bug page</h4>
<a href="page1.html"><input  type="button" value="Go to Page 1"></a>
</body>
</html>