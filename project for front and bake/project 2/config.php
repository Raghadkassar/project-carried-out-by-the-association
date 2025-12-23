<?php
$con = mysqli_connect("localhost", "root", "", "onlinee");
if (!$con) {
    die("فشل الاتصال بقاعدة البيانات: " . mysqli_connect_error());
}

?>