<?php
// config/db.php - الاتصال بقاعدة البيانات SQLite باستخدام PDO

try {
    // إنشاء أو فتح قاعدة البيانات SQLite داخل مجلد database
    $db_path = __DIR__ . '/../database/database.sqlite';
    $pdo = new PDO("sqlite:" . $db_path);
    
    // تفعيل وضع الأخطاء للاستثناءات
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    // تفعيل المفاتيح الأجنبية
    $pdo->exec("PRAGMA foreign_keys = ON;");
    
} catch (PDOException $e) {
    die("خطأ في الاتصال بقاعدة البيانات: " . $e->getMessage());
}
?>