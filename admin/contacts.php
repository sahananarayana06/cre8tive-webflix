<?php

session_start();

if (!isset($_SESSION["admin_id"])) {

    header("Location: login.php");
    exit;

}

include "../backend/db.php";

$result = $conn->query(
    "SELECT * FROM contacts
     ORDER BY id DESC"
);

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Project Requests</title>

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

<a href="dashboard.php">
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

<h1>Project Requests</h1>


<div class="table-container">

<table>

<thead>

<tr>

<th>ID</th>

<th>Name</th>

<th>Email</th>

<th>Phone</th>

<th>Project</th>

<th>Message</th>

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
<?= htmlspecialchars($row["email"]) ?>
</td>

<td>
<?= htmlspecialchars($row["phone"]) ?>
</td>

<td>
<?= htmlspecialchars(
    $row["project_type"]
) ?>
</td>

<td>
<?= htmlspecialchars($row["message"]) ?>
</td>

<td>
<?= $row["created_at"] ?>
</td>

<td>

<a class="delete"
href="delete_contact.php?id=
<?= $row["id"] ?>"
onclick="
return confirm(
'Delete this request?'
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