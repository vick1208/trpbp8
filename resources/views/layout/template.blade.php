<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
<!-- yield berfungsi untuk mengambil section dari blade lain-->    
<title>@yield('title')</title>
</head>
<body>
    <!--include dipakai untuk menambahkan fitur dalam halaman-->
    @include('layout.nav')

    @yield('content')
    <!-- footer ini dipasang secara sticky-->
    <footer class="page-footer font-small" >
        <div class="container container-fluid" style="position: relative">
            <p style="position: fixed; bottom: 0; width:80%; text-align: center">
            Created by : Vicky,Christanti.
            </p>
        </div>
    </footer>
<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>