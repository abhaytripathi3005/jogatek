<?php
header('Content-Type: application/json');

$conn = new mysqli("localhost", "adminr", "2kH1{2%-3&at", "teksathi");

if ($conn->connect_error) {
  echo json_encode(["status"=>"error","message"=>"DB connection failed"]);
  exit;
}

// INPUTS
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$experience = $_POST['experience'] ?? '';
$message = $_POST['message'] ?? '';

// VALIDATION
if (!$name || !$email || !$phone || !$experience || !$message) {
  echo json_encode(["status"=>"error","message"=>"All fields required"]);
  exit;
}

// RESUME UPLOAD
$resume = "";

if (isset($_FILES['resume']) && $_FILES['resume']['name'] != "") {

  if ($_FILES['resume']['error'] !== 0) {
    echo json_encode([
      "status"=>"error",
      "message"=>"Upload error: ".$_FILES['resume']['error']
    ]);
    exit;
  }

  $uploadDir = __DIR__ . "/../uploads/career/";

  if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
  }

  $fileName = time() . "_" . basename($_FILES["resume"]["name"]);
  $target = $uploadDir . $fileName;

  if (!move_uploaded_file($_FILES["resume"]["tmp_name"], $target)) {
    echo json_encode([
      "status"=>"error",
      "message"=>"Resume upload failed"
    ]);
    exit;
  }

  $resume = $fileName;
}

// INSERT
$sql = "INSERT INTO jogatek_apply_job 
(name,email,phone,experience,message,resume)
VALUES
('$name','$email','$phone','$experience','$message','$resume')";

if ($conn->query($sql)) {
  echo json_encode(["status"=>"success","message"=>"Application submitted successfully"]);
} else {
  echo json_encode(["status"=>"error","message"=>$conn->error]);
}

$conn->close();
?>