<?php
// Get the note from the POST data
print_r($_POST); 
$note = $_POST['note'];
$category = $_POST['category'];
$current_date = date("Y-m-d");

$conn = new mysqli("localhost", "root", "", "test");
$query = $conn->prepare("INSERT INTO `notes` (`name`, `category`, `content`, `date`) VALUES ( 'Study Note', ?, ?,?); ");
$query->bind_param("sss", $category, $note, $current_date);
$query->execute();
?>