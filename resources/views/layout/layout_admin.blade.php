<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    @stack('style')
    <link rel="stylesheet" href="{{asset('./css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('./css/sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('./css/reguler.css')}}">
    <link rel="stylesheet" href="{{asset('./css/style.css')}}">
    <title>Sistem Manajemen Kendaraan Sekawan</title>
</head>
<body>
    @include('components.header')

    <div class="body-part">
        @include('components.sidebar-admin')

        <div class="content-body">
            @yield('content')
        </div>
    </div>

    @stack('script')
</body>
</html>