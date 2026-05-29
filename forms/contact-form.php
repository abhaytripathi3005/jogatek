<?php
header('Content-Type: application/json');

$conn = new mysqli("localhost", "adminr", "2kH1{2%-3&at", "teksathi");

if ($conn->connect_error) {
  echo json_encode([
    "status" => "error",
    "message" => "DB connection failed"
  ]);
  exit;
}

// INPUTS
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$contact_type = $_POST['contact_type'] ?? '';
$message = $_POST['message'] ?? '';

// VALIDATION
if (!$name || !$email || !$phone || !$contact_type || !$message) {
  echo json_encode([
    "status" => "error",
    "message" => "All fields are required"
  ]);
  exit;
}

// INSERT QUERY
$sql = "INSERT INTO jogatek_contact_form 
(name, email, phone, contact_type, message)
VALUES
('$name', '$email', '$phone', '$contact_type', '$message')";

if ($conn->query($sql)) {
  echo json_encode([
    "status" => "success",
    "message" => "Form submitted successfully"
  ]);
} else {
  echo json_encode([
    "status" => "error",
    "message" => $conn->error
  ]);
}

$conn->close();
?>