<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../feedback.php");
    exit;
}


$name = trim($_POST["name"] ?? "");
$rating = (int)($_POST["rating"] ?? 0);
$message = trim($_POST["message"] ?? "");


/* VALIDATION */

if ($name === "" || $message === "") {

    die("Please fill all required fields.");

}


if ($rating < 1 || $rating > 5) {

    die("Please select a valid rating.");

}


/* INSERT FEEDBACK */

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

        alert('Feedback submitted successfully!');

        window.location.href = '../feedback.php';

    </script>
    ";

} else {

    echo "
    <script>

        alert('Something went wrong. Please try again.');

        window.location.href = '../feedback.php';

    </script>
    ";

}


$stmt->close();
$conn->close();

?>
