<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Dashboard</title>
    <style>
        h1 {
            justify-content: center;
            padding: 100px 0 10px 0;
            display: flex;
        }

        header {
            justify-content: center;
            display: flex;
        }
    </style>
</head>
<div class="b-example-divider"></div>

<nav class="py-2 bg-body-tertiary border-bottom">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
            <li class="nav-item"><a href="dashboard" class="nav-link link-body-emphasis px-2 active"
                    aria-current="page">Home</a></li>
          
        </ul>
        <ul class="nav">
            <li class="nav-item"><a href="login" class="nav-link link-body-emphasis px-2">Login</a></li>
            <li class="nav-item"><a href="registrasi" class="nav-link link-body-emphasis px-2">Sign up</a></li>
        </ul>
    </div>
</nav>

@yield('isi_halaman')
</body>

</html>