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
    <link rel="stylesheet" href="{{asset('./css/login.css')}}">
    <link rel="stylesheet" href="{{asset('./css/reguler.css')}}">
    <link rel="stylesheet" href="{{asset('./css/style.css')}}">
    <title>Sistem Manajemen Kendaraan Sekawan</title>
</head>
<body>
    <div class="jumbotron">
        <img src="{{asset('./img/jumbotron.png')}}" alt="">
        <div class="login-box">
            <form action="/register" method="POST">
                @csrf
                <p>Signup</p>
                {{-- <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Budi.mining@email.com">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="********"> --}}
                <button type="submit" class="btn btn-blue">Login</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>