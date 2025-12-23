<?php
include('config.php');

if (isset($_POST['upload'])) {
    $names = $_POST['name'];
    $prices = $_POST['pric'];
    $images = $_FILES['imag'];

    $total = count($names);

    for ($i = 0; $i < $total; $i++) {
        // التحقق من وجود مدخل صالح
        if (!empty($names[$i]) && !empty($prices[$i]) && !empty($images['name'][$i])) {
            $name = mysqli_real_escape_string($con, $names[$i]);
            $price = mysqli_real_escape_string($con, $prices[$i]);

            $image_name = basename($images['name'][$i]);
            $image_tmp = $images['tmp_name'][$i];
            $image_path = 'images/' . $image_name;

            if (move_uploaded_file($image_tmp, $image_path)) {
                $query = "INSERT INTO prod (name, pric, imag) VALUES ('$name', '$price', '$image_path')";
                $result = mysqli_query($con, $query);

                if (!$result) {
                    echo "فشل إدخال المنتج رقم " . ($i+1) . ": " . mysqli_error($con) . "<br>";
                }
            } else {
                echo "فشل رفع الصورة للمنتج رقم " . ($i+1) . "<br>";
            }
        } else {
            echo "بيانات ناقصة للمنتج رقم " . ($i+1) . "<br>";
        }
    }

    echo "<br><a href='products.php'>عرض المنتجات</a>";
} else {
    echo "الزر لم يُضغط بشكل صحيح.";
}
?>