<?php
include "db.php";

$hashed = password_hash("admin123", PASSWORD_BCRYPT);

$sql = "UPDATE users 
        SET password = '$hashed', role = 'admin'
        WHERE email = 'admin@demo.com'";

if ($conn->query($sql) === TRUE) {
    echo "Admin password updated successfully!";
} else {
    echo "Error: " . $conn->error;
}
?>
