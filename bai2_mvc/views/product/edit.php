<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>EDIT</title>
</head>

<body class="container my-4">
    <h1 class="title ">EDIT</h1>
    <form action="index.php?url=edit-product&id=<?= $productData['id'] ?>" method="post">
        <input type="text" name="name" id="name" class="form-control" value="<?= $productData['name'] ?>">
        <br>
        <input type="number" name="price" id="price" class="form-control" value="<?= $productData['price'] ?>">
        <br>

        <button type="submit" name="edit" class="btn btn-secondary">Sửa</button>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>