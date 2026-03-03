<?php
require_once __DIR__ . '/config.php';
try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        throw new Exception("เชื่อมต่อฐานข้อมูลไม่สำเร็จ: " . $conn->connect_error);
    }
<<<<<<< HEAD
    echo "เชื่อมต่อฐานข้อมูลสำเร็จ";
} catch (Exception $error) {
    die("ระบบขัดข้อง"); //. $error->getMessage());
}

?> 
=======
} catch (Exception $error) {
    die("ระบบขัดข้อง กรุณาลองใหม่ภายหลัง"); //. $error->getMessage());
}

?>
>>>>>>> cf571353623825a83e8da5139bee94aeb2b7ea67
