<?php

session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit;
}

include "../backend/db.php";

$result = $conn->query(
    "SELECT * FROM contacts ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>Project Requests | Admin</title>

<style>

body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #00081B;
    color: white;
}

.container {
    width: 95%;
    margin: 40px auto;
}

h1 {
    color: #A855F7;
    margin-bottom: 25px;
}

.table-box {
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
    background: #0B1228;
}

th,
td {
    padding: 15px;
    border: 1px solid rgba(255,255,255,0.1);
    text-align: left;
}

th {
    background: #111936;
    color: #A855F7;
}

td {
    color: #B8BBC8;
}

tr:hover {
    background: #121b38;
}

.message {
    min-width: 250px;
}

.date {
    white-space: nowrap;
}

</style>

</head>

<body>

<div class="container">

    <h1>Project Requests</h1>

    <div class="table-box">

        <table>

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Project Type</th>
                    <th>Project Details</th>
                    <th>Date</th>

                </tr>

            </thead>

            <tbody>

            <?php

            if ($result && $result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

            ?>

                <tr>

                    <td>
                        <?= htmlspecialchars($row['id']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($row['name']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($row['email']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($row['phone']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($row['project_type']) ?>
                    </td>

                    <td class="message">
                        <?= nl2br(htmlspecialchars($row['message'])) ?>
                    </td>

                    <td class="date">
                        <?= htmlspecialchars($row['created_at']) ?>
                    </td>

                </tr>

            <?php

                }

            } else {

            ?>

                <tr>

                    <td colspan="7">
                        No project requests found.
                    </td>

                </tr>

            <?php

            }

            ?>

            </tbody>

        </table>

    </div>

</div>

</body>

</html>
