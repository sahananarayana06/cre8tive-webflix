<!-- <?php

echo password_hash("admin123", PASSWORD_DEFAULT);

?> -->

<?php

$password = "admin123";

$hash = password_hash($password, PASSWORD_DEFAULT);

echo "<h2>Admin Password Hash</h2>";
echo "<p>Copy the hash below:</p>";
echo "<textarea style='width:600px;height:80px;'>"
     . htmlspecialchars($hash)
     . "</textarea>";

?>