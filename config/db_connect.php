<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tuncer";


try {
    // محاولة الاتصال بقاعدة البيانات
    $conn = new mysqli($servername, $username, $password, $dbname);

    // التحقق من وجود خطأ في الاتصال
    if($conn->connect_error) {
        throw new Exception("DB Connection failed: " . $conn->connect_error);
    }
    // هنا إذا نجح الاتصال، لا تفعل شيئًا
} catch (Exception $e) {
    // يمكنك تسجيل الخطأ في ملف لعرضه لاحقاً للمطورين
    error_log($e->getMessage(), 3, "errors.log");

    // توجيه المستخدم إلى صفحة خطأ أو عرض رسالة مخصصة (دون معلومات حساسة)
    header('Location: error_page.php');
    exit;
}
?>