<?php

session_start();

if (!isset($_SESSION["admin_id"])) {

    header("Location: login.php");
    exit;

}

include "../backend/db.php";

$result = $conn->query(
    "SELECT * FROM feedback
     ORDER BY id DESC"
);

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Feedback Management</title>

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
Customer Feedback
</h1>


<div class="table-container">

<table>

<thead>

<tr>

<th>ID</th>

<th>Name</th>

<th>Rating</th>

<th>Feedback</th>

<th>Date</th>

<th>Action</th>

</tr>

</thead>


<tbody>

<?php

while ($row = $result->fetch_assoc()):

?>

<tr>

<td>
<?= $row["id"] ?>
</td>

<td>
<?= htmlspecialchars($row["name"]) ?>
</td>

<td>

<span class="stars">

<?= str_repeat(
    "★",
    $row["rating"]
) ?>

</span>

</td>

<td>
<?= htmlspecialchars($row["message"]) ?>
</td>

<td>
<?= $row["created_at"] ?>
</td>

<td>

<a class="delete"
href="delete_feedback.php?id=
<?= $row["id"] ?>"
onclick="
return confirm(
'Delete this feedback?'
);
">
Delete
</a>

</td>

</tr>

<?php endwhile; ?>

</tbody>

</table>

</div>

</main>

</div>

</body>

</html>