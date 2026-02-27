<?php

// 1️⃣ اتصال به دیتابیس
$connection = mysqli_connect("localhost", "root", "", "school_db");

// بررسی اتصال
if (!$connection) {
    die("خطا در اتصال به دیتابیس: " . mysqli_connect_error());
}


// 2️⃣ دریافت اطلاعات فرم
$name = $_POST['name'];
$family = $_POST['family'];
$nomre_php = $_POST['nomre_php'];


// 3️⃣ نوشتن دستور SQL
$sql = "INSERT INTO students (name, family, nomre_php)
        VALUES ('$name', '$family', '$nomre_php')";


// 4️⃣ اجرای دستور
$result = mysqli_query($connection, $sql);


// 5️⃣ بررسی نتیجه
if ($result) {
    echo "اطلاعات با موفقیت ثبت شد.";
} else {
    echo "خطا در ثبت اطلاعات: " . mysqli_error($connection);
}


// 6️⃣ بستن اتصال
mysqli_close($connection);

?>
