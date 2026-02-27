<?php

$connection = mysqli_connect("localhost", "root", "", "school_db");

if (!$connection) {
    die("خطا در اتصال: " . mysqli_connect_error());
}

// دریافت اطلاعات فرم
$name = $_POST['name'];
$family = $_POST['family'];
$nomre_php = $_POST['nomre_php'];


// 1️⃣ آماده سازی کوئری
$sql = "INSERT INTO students (name, family, nomre_php)
        VALUES (?, ?, ?)";

$stmt = mysqli_prepare($connection, $sql);


// 2️⃣ اتصال متغیرها به کوئری
mysqli_stmt_bind_param($stmt, "ssd", $name, $family, $nomre_php);


// 3️⃣ اجرای کوئری
$result = mysqli_stmt_execute($stmt);


// 4️⃣ بررسی نتیجه
if ($result) {
    echo "ثبت با موفقیت انجام شد.";
} else {
    echo "خطا در ثبت اطلاعات";
}


// 5️⃣ بستن
mysqli_stmt_close($stmt);
mysqli_close($connection);

?>
