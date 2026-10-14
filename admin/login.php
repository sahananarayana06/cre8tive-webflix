
<?php

session_start();

include "../backend/db.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST["username"] ?? "");
    $password = $_POST["password"] ?? "";


    $stmt = $conn->prepare(
        "SELECT id, username, password
         FROM admins
         WHERE username = ?
         LIMIT 1"
    );

    $stmt->bind_param("s", $username);

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {

        $admin = $result->fetch_assoc();

        if (
            password_verify(
                $password,
                $admin["password"]
            )
        ) {

            $_SESSION["admin_id"] =
                $admin["id"];

            $_SESSION["admin_username"] =
                $admin["username"];

            header("Location: /cre8tive_webflix/admin/admin_dashboard.php");
            // die("LOGIN SUCCESS - login.php is working correctly");
            exit();

        }

    }

    $error = "Invalid username or password.";

}

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Admin Login | Cre8tive Webflix</title>

<link rel="stylesheet"
href="admin.css">

</head>

<body>

<div class="login-box">

<h1>
CRE8TIVE <span>WEBFLIX</span>
</h1>

<p>ADMIN PANEL</p>


<?php if ($error): ?>

<div class="error">
<?= htmlspecialchars($error) ?>
</div>

<?php endif; ?>


<form method="POST">

<input
type="text"
name="username"
placeholder="Username"
required
>

<input
type="password"
name="password"
placeholder="Password"
required
>

<button type="submit">
LOGIN →
</button>

</form>

</div>

</body>

</html>
