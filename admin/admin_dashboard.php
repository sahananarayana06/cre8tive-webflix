<?php

session_start();

if (!isset($_SESSION["admin_id"])) {

    header("Location: login.php");

    exit;

}

include "../backend/db.php";


/* =========================================
   PROJECT REQUESTS COUNT
========================================= */

$contactsResult = $conn->query(
    "SELECT COUNT(*) AS total
     FROM contacts"
);

$contacts =
    $contactsResult
    ? $contactsResult->fetch_assoc()["total"]
    : 0;


/* =========================================
   FEEDBACK COUNT
========================================= */

$feedbackResult = $conn->query(
    "SELECT COUNT(*) AS total
     FROM feedback"
);

$feedback =
    $feedbackResult
    ? $feedbackResult->fetch_assoc()["total"]
    : 0;


/* =========================================
   WEBSITE STATISTICS
========================================= */

$statsResult = $conn->query(
    "SELECT
        projects,
        clients,
        creativity,
        support_hours
     FROM site_stats
     WHERE id = 1
     LIMIT 1"
);


if ($statsResult && $statsResult->num_rows > 0) {

    $stats =
        $statsResult->fetch_assoc();

    $projects =
        (int)$stats["projects"];

    $clients =
        (int)$stats["clients"];

    $creativity =
        (int)$stats["creativity"];

    $support =
        (int)$stats["support_hours"];

} else {

    $projects = 0;
    $clients = 0;
    $creativity = 100;
    $support = 24;

}

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title>Admin Dashboard</title>

<link
    rel="stylesheet"
    href="admin.css"
>

</head>

<body>


<div class="admin-container">


<!-- =========================================
     SIDEBAR
========================================= -->

<aside class="sidebar">

    <h2>
        CRE8TIVE
        <span>WEBFLIX</span>
    </h2>


    <a
        href="admin_dashboard.php"
        class="active"
    >
        Dashboard
    </a>


    <a href="contacts.php">
        Project Requests
    </a>


    <a href="feedback.php">
        Feedback
    </a>


    <a href="stats.php">
        Website Statistics
    </a>


    <a href="logout.php">
        Logout
    </a>

</aside>


<!-- =========================================
     MAIN
========================================= -->

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


    <!-- =====================================
         DASHBOARD CARDS
    ====================================== -->

    <div class="dashboard-cards">


        <!-- PROJECT REQUESTS -->

        <div class="dashboard-card">

            <span>
                PROJECT REQUESTS
            </span>


            <strong>
                <?= $contacts ?>
            </strong>


            <a href="contacts.php">
                View Requests →
            </a>

        </div>


        <!-- FEEDBACK -->

        <div class="dashboard-card">

            <span>
                FEEDBACK
            </span>


            <strong>
                <?= $feedback ?>
            </strong>


            <a href="feedback.php">
                View Feedback →
            </a>

        </div>


        <!-- WEBSITE STATISTICS -->

        <div class="dashboard-card">

            <span>
                WEBSITE STATISTICS
            </span>


            <strong>
                <?= $projects ?>
            </strong>


            <p>
                Projects
                &nbsp; | &nbsp;
                <?= $clients ?>
                Clients
            </p>


            <a href="stats.php">
                Manage Statistics →
            </a>

        </div>


    </div>


</main>

</div>

</body>

</html>
