<?php
$host ="localhost";
$username ="root";
$password ="";
$database ="db68s_product";
//connect database ด้วย mysqli

// $conn = new mysqli($host,$username,$password,$database);

// if($conn->connect_error){
//     die("connect field:" . $conn->connect_error);
// }else{
//     echo "Connected successfully";
// }


//connect database ด้วย PDO
$dns="mysql:host=$host;dbname=$database";

try {
    // $conn = new PDO("mysql:host=$host;dbname=$database",$username,$password);
    $conn = new PDO($dns,$username,$password);
    //set the PDO error mode to exception
    $conn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "PDO: Connect successfully";
} catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();

}

?>

