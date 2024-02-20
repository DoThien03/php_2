<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @include('layout.style')
    <title>Document</title>
</head>

<body>
    <div class="container">
        <header>
            <div class="header-main">
                <ul class="menu">
                    <li><a href="">Quản lý danh mục</a></li>
                    <li><a href="">Quản lý sản phẩm</a></li>
                    <li><a href="add-products">Thêm sản phẩm</a></li>
                </ul>
            </div>
        </header>
        <section class="content">
            @yield('content')
        </section>
        <footer>
            <span>FPT POLYTECNIC</span>
        </footer>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>