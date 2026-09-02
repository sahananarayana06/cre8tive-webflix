<?php

session_start();

if (!isset($_SESSION["admin_id"])) {

    header("Location: login.php");

    exit;

}

include "../backend/db.php";


$contacts =
    $conn->query(
        "SELECT COUNT(*) AS total
         FROM contacts"
    )->fetch_assoc()["total"];


$feedback =
    $conn->query(
        "SELECT COUNT(*) AS total
         FROM feedback"
    )->fetch_assoc()["total"];

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Admin Dashboard</title>

<link rel="stylesheet"
href="admin.css">

</head>

<body>


<div class="admin-container">


<aside class="sidebar">

<h2>
CRE8TIVE
<span>WEBFLIX</span>
</h2>

<a href="admin_dashboard.php">
Dashboard
</a>

<a href="contacts.php">
Project Requests
</a>

<a href="feedback.php">
Feedback
</a>

<a href="logout.php">
Logout
</a>

</aside>


<main class="admin-main">

<h1>
Dashboard
</h1>

<p class="welcome">
Welcome,
<?= htmlspecialchars(
    $_SESSION["admin_username"]
) ?>
</p>


<div class="dashboard-cards">


<div class="dashboard-card">

<span>PROJECT REQUESTS</span>

<strong>
<?= $contacts ?>
</strong>

<a href="contacts.php">
View Requests →
</a>

</div>


<div class="dashboard-card">

<span>FEEDBACK</span>

<strong>
<?= $feedback ?>
</strong>

<a href="feedback.php">
View Feedback →
</a>

</div>


</div>

</main>

</div>

</body>

</html>