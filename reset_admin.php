<?php

include "backend/db.php";

$username = "admin1";
$password = "admin123";

$hashedPassword = password_hash(
    $password,
    PASSWORD_DEFAULT
);

$stmt = $conn->prepare(
    "UPDATE admins
     SET password = ?
     WHERE username = ?"
);

$stmt->bind_param(
    "ss",
    $hashedPassword,
    $username
);

if ($stmt->execute()) {

    if ($stmt->affected_rows > 0) {

        echo "<h2>Admin password updated successfully!</h2>";

        echo "<p>Username: <b>admin</b></p>";
        echo "<p>Password: <b>Cre8tive123</b></p>";

    } else {

        echo "<h2>Admin username not found.</h2>";
        echo "<p>Please check your admins table.</p>";

    }

} else {

    echo "Error: " . $stmt->error;

}

$stmt->close();
$conn->close();

?>