<?php
require_once 'includes/config.php';

$email = 'admin1';
$password = 'admin123';

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("
    UPDATE users
    SET name = ?, password = ?, role = 'admin'
    WHERE email = ?
");

$name = 'Administrator';

$stmt->bind_param("sss", $name, $hashedPassword, $email);

if ($stmt->execute()) {
    if ($stmt->affected_rows > 0) {
        echo "<h2>Admin account updated successfully!</h2>";
        echo "<p>Email: admin@gmail.com</p>";
        echo "<p>Password: admin123</p>";
    } else {
        echo "<h2>Admin user not found.</h2>";
        echo "<p>Create the user first in the users table.</p>";
    }
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>