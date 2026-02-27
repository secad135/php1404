<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ثبت دانش آموز</title>
</head>
<body>

<h2>فرم ثبت دانش آموز</h2>

<form action="insert.php" method="post">
    
    نام:
    <input type="text" name="name" required>
    <br><br>

    نام خانوادگی:
    <input type="text" name="family" required>
    <br><br>

    نمره PHP:
    <input type="number" step="0.01" name="nomre_php" required>
    <br><br>

    <input type="submit" value="ثبت اطلاعات">

</form>

</body>
</html>
