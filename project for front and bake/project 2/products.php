<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>عرض المنتجات</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            direction: rtl;
        }
        h3 {
            font-family: 'Courier New', Courier, monospace;
            font-size: 40px;
            font-weight: bold;
            background-color: #9e3590;
            color: white;
            padding: 10px;
            margin-bottom: 20px;
        }
        .card-title, .card-text {
            font-size: 20px;
            font-weight: bold;
        }
        .btn-danger, .btn-primary {
            font-size: 16px;
            font-weight: bold;
            border-radius: 10px;
        }
        .card-img-top {
            border-radius: 10px;
            height: 200px;
            object-fit: cover;
        }
        .card {
            margin: 15px;
            width: 18rem;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>
</head>
<body>

    <center>
        <h3>جميع المنتجات المتوفرة</h3>
    </center>

    <div class="container">
        <?php
        include('config.php');

        $result = mysqli_query($con, "SELECT * FROM prod");
        while ($row = mysqli_fetch_array($result)) {
            echo "
            <div class='card'>
                <img src='{$row['imag']}' class='card-img-top'>
                <div class='card-body'>
                    <h5 class='card-title'>{$row['name']}</h5>
                    <p class='card-text'>السعر: {$row['pric']}</p>
                    <a href='#' class='btn btn-danger mb-2'>حذف المنتج</a>
                    <a href='#' class='btn btn-primary'>تعديل المنتج</a>
                </div>
            </div>
            ";
        }
        ?>
    </div>

</body>
</html>