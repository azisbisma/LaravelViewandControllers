<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Depan</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class='container'>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <span class="navbar-text">
                    Selamat Datang
                </span>
            </div>
        </nav><br>
        <div class="card text-center">
            <div class="card-header">
                Profile
            </div>
            <div class="card-body">
                <h5 class="card-title">Profile Saya</h5>
                <p class="card-text">Untuk mengetahui profile saya silahkan klik tombol berikut</p>
                <a href="{{ route('profile') }}" class="btn btn-primary">Klik disini</a>
            </div>
        </div><br>
        <div class="card text-center">
            <div class="card-header">
                Kampus
            </div>
            <div class="card-body">
                <h5 class="card-title">Kampus Saya</h5>
                <p class="card-text">Untuk mengetahui kampus saya silahkan klik tombol berikut</p>
                <a href="{{ route('kampus') }}" class="btn btn-primary">Klik disini</a>
            </div>
        </div>
    </body>
</html>
