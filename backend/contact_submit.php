<?php

include "db.php";

/* =========================
   GET FORM DATA
========================= */

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$project_type = trim($_POST['project_type'] ?? '');
$message = trim($_POST['message'] ?? '');


/* =========================
   VALIDATION
========================= */

if (
    empty($name) ||
    empty($email) ||
    empty($phone) ||
    empty($project_type) ||
    empty($message)
) {
    die("Please fill all required fields.");
}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Please enter a valid email address.");
}


if (!preg_match('/^[0-9]{10}$/', $phone)) {
    die("Please enter a valid 10-digit phone number.");
}


/* =========================
   STORE IN DATABASE
========================= */

$sql = "INSERT INTO contacts
        (name, email, phone, project_type, message)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Database error.");
}

$stmt->bind_param(
    "sssss",
    $name,
    $email,
    $phone,
    $project_type,
    $message
);

if (!$stmt->execute()) {
    die("Unable to save project request.");
}


/* =========================
   WHATSAPP MESSAGE
========================= */

$whatsapp_number = "917892321560";

$whatsapp_message =
    "Hello Cre8tive Webflix!%0A%0A" .
    "I want to start a project.%0A%0A" .
    "Name: " . rawurlencode($name) . "%0A" .
    "Email: " . rawurlencode($email) . "%0A" .
    "Phone: " . rawurlencode($phone) . "%0A" .
    "Project Type: " . rawurlencode($project_type) . "%0A" .
    "Project Details: " . rawurlencode($message);


/* =========================
   REDIRECT TO WHATSAPP
========================= */

$whatsapp_url =
    "https://wa.me/" .
    $whatsapp_number .
    "?text=" .
    $whatsapp_message;

header("Location: " . $whatsapp_url);

exit;

?>
