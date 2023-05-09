<?php
  
$conn = new mysqli("localhost", "root", "787898", "php_demo");
  $name = $_POST["name"];
  $score = $_POST["score"];
  $sql = "insert into demo_table (name, score) values ('$name', '$score')";
  $conn->query($sql);
  $conn->close();
  header("location: index.php");
?>
