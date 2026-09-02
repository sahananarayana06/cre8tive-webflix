<?php

session_start();

if (!isset($_SESSION["admin_id"])) {

    header("Location: login.php");
    exit;

}

include "../backend/db.php";

$id = intval($_GET["id"] ?? 0);

if ($id > 0) {

    $stmt = $conn->prepare(
        "DELETE FROM feedback
         WHERE id = ?"
    );

    $stmt->bind_param("i", $id);

    $stmt->execute();

    $stmt->close();

}

header("Location: feedback.php");

exit;

?>