<!DOCTYPE html>
<html>
    <head>
        <title>Informasi Kampus</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-4">
            <h1>Informasi Kampus</h1>
            <div class="row">
                <div class="col-md-6">
                    <p>Nama Kampus: {{ $namaKampus }}</p>
                    <p>Lokasi Kampus: {{ $lokasiKampus }}</p>
                </div>
            </div>
        </div>
    </body>
</html>
