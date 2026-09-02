<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {

    header("Location: ../feedback.php");
    exit;

}

$name = trim($_POST["name"] ?? "");
$rating = intval($_POST["rating"] ?? 0);
$message = trim($_POST["message"] ?? "");


if (
    empty($name) ||
    empty($message) ||
    $rating < 1 ||
    $rating > 5
) {

    die("Please provide valid feedback.");

}


$stmt = $conn->prepare(

    "INSERT INTO feedback
    (name, rating, message)
    VALUES (?, ?, ?)"

);


$stmt->bind_param(
    "sis",
    $name,
    $rating,
    $message
);


if ($stmt->execute()) {

    echo "

    <script>

    alert('Thank you for your feedback!');

    window.location.href='../feedback.php';

    </script>

    ";

} else {

    echo "Unable to submit feedback.";

}


$stmt->close();

$conn->close();

?>