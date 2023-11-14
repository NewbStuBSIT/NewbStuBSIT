<?php
include 'dbconn.php';

$id = $_GET['id'];

$sql = "DELETE FROM user WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  header("Location: todolist.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>