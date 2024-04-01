<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    <link rel="stylesheet" href="{{asset('assets/bootstrap-4.5.3-dist/css/bootstrap.min.css')}}">--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>@yield('title')</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="#">Trường Đại Học Thủy Lợi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('rentals.index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Quản lý sinh viên</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Đăng xuất</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Tìm kiếm</button>
                </form>
            </div>
        </div>
    </nav>
</header>
<main>
    @yield('main')
</main>
<footer class="bg-success text-white">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-6">
                <h5 class="mb-3">Tác giả:Hoàng Ánh Nguyệt</h5>
                <p>Trường Đại Học Thủy Lợi</p>
                <p>Địa chỉ: 175 Tây Sơn, Đống Đa, Hà Nội</p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="#" class="btn btn-light">Liên hệ ngay</a>
            </div>
        </div>
    </div>
    <div class="text-center py-2">
        © 2024 Trường Đại Học Thủy Lợi. All rights reserved.
    </div>
</footer>
{{--<script src="{{asset('assets/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js')}}"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@yield('thuvien')
</body>
</html>
