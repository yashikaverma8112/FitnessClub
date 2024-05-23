<?php
    $insert = false;
if(isset($_POST['name'])) {
$server = DB_SERVER;
$username = DB_USERNAME;
$password = DB_PASSWORD;

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("Connection failed ".mysqli_connect_error());

}
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$weight = $_POST['weight'];

$sql = "INSERT INTO `DB_NAME`.`TABLE_NAME` (`name`, `age`, `gender`, `weight`, `date`) VALUES ('$name', '$age', '$gender', '$weight', current_timestamp());";

if($con->query($sql) == true){
    $insert = true;
}
else{

    echo "ERRO: $sql <br> $con->error";
    
}
$con->close();
}
?>
