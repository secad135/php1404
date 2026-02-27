<?php

$connection = mysqli_connect("localhost", "root", "", "school_db");

if (!$connection) {
    die("خطا در اتصال: " . mysqli_connect_error());
}

// گرفتن اطلاعات
$name = $_POST['name'];
$family = $_POST['family'];
$nomre_php = $_POST['nomre_php'];

// ایمن سازی ورودی ها
$name = mysqli_real_escape_string($connection, $name);
$family = mysqli_real_escape_string($connection, $family);
$nomre_php = mysqli_real_escape_string($connection, $nomre_php);

// دستور SQL
$sql = "INSERT INTO students (name, family, nomre_php)
        VALUES ('$name', '$family', '$nomre_php')";

$result = mysqli_query($connection, $sql);

if ($result) {
    echo "ثبت با موفقیت انجام شد.";
} else {
    echo "خطا: " . mysqli_error($connection);
}

mysqli_close($connection);

?>
