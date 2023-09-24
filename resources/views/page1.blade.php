<!DOCTYPE html>
<html>
<head>
    <title>Profil Pembuat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h1>Profil</h1>
        <div class="row">
            <div class="col-md-6">
                <p>Nama: {{ $nama }}</p>
                <p>Hobi: {{ $hobi }}</p>
                <p>Kegiatan: {{ $kegiatan }}</p>
                <p>Semester: {{ $semester }}</p>
            </div>
        </div>
    </div>
</body>
</html>
