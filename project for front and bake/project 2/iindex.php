<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة منتجات متعددة</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            direction: rtl;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .product-entry {
            background-color: #fff;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px #ccc;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"], input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        .add-product {
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .submit-btn {
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        /* زر عرض المنتجات */
        .view-products-btn {
            display: inline-block;
            margin-bottom: 20px;
            padding: 12px 25px;
            background-color: #17a2b8;
            color: white;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
        }
        .view-products-btn:hover {
            background-color: #138496;
        }
    </style>
</head>
<body>

    <!-- وسم صورة الشعار -->
    <center><img src="logo.jpg" alt="شعار الموقع"></center>

    <!-- زر عرض المنتجات -->
    <center>
        <a href="products.php" class="view-products-btn">عرض المنتجات المرفوعة</a>
    </center>

    <h2>نموذج إضافة منتجات متعددة</h2>
    <form action="insert.php" method="POST" enctype="multipart/form-data" id="product-form">
        <div class="product-entry">
            <label>اسم المنتج:</label>
            <input type="text" name="name[]" required>

            <label>السعر:</label>
            <input type="text" name="pric[]" required>

            <label>صورة المنتج:</label>
            <input type="file" name="imag[]" accept="image/*" required>
        </div>

        <button type="button" class="add-product" onclick="addProduct()">إضافة منتج آخر</button>
        <br>
        <button type="submit" name="upload" class="submit-btn">رفع المنتجات</button>
    </form>

    <script>
        function addProduct() {
            const form = document.getElementById('product-form');
            const productEntry = document.querySelector('.product-entry');
            const newEntry = productEntry.cloneNode(true);

            // إعادة تعيين قيم الحقول
            const inputs = newEntry.querySelectorAll('input');
            inputs.forEach(input => {
                if (input.type !== 'file') {
                    input.value = '';
                } else {
                    input.value = null;
                }
            });

            form.insertBefore(newEntry, form.querySelector('.add-product'));
        }
    </script>

</body>
</html>