<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {

    header("Location: ../contact.php");
    exit;

}

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$phone = trim($_POST["phone"] ?? "");
$project_type = trim($_POST["project_type"] ?? "");
$message = trim($_POST["message"] ?? "");


if (
    empty($name) ||
    empty($email) ||
    empty($project_type) ||
    empty($message)
) {

    die("Please fill all required fields.");

}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    die("Please enter a valid email address.");

}


$stmt = $conn->prepare(

    "INSERT INTO contacts
    (name, email, phone, project_type, message)
    VALUES (?, ?, ?, ?, ?)"

);


$stmt->bind_param(
    "sssss",
    $name,
    $email,
    $phone,
    $project_type,
    $message
);


if ($stmt->execute()) {

    echo "

    <script>

    alert('Project request submitted successfully!');

    window.location.href='../contact.php';

    </script>

    ";

} else {

    echo "Something went wrong. Please try again.";

}


$stmt->close();

$conn->close();

?>