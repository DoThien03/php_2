<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="container my-5">

    <h1 class="text-center">LIST PRODUCTS</h1>
    <a href="index.php?url=add-product" class="btn btn-primary my-4 ">Thêm</a>
    <table class="table" border="1">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
            <th>Chức năng</th>
        </tr>
        <?php foreach ($listProduct as  $value) { ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['name'] ?></td>
                <td><?= $value['price'] ?></td>
                <td>
                    <a href="index.php?url=edit-product&id=<?= $value['id'] ?>" class="btn btn-secondary">sửa</a>
                    <a href="index.php?url=delete&id=<?= $value['id'] ?>" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>