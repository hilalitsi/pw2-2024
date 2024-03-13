<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
    <body>        
        <form class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" method="POST" action="hasil_daftar.php">
            <h2>Form Daftar</h2>
            <hr />
            <div class="container px-3">
                <div class="form-group row mb-3">
                    <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label>
                    <div class="col-8">
                        <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" placeholder="Masukan Nama Anda" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="email" class="col-4 col-form-label">Email</label>
                    <div class="col-8">
                        <input type="text" id="email" name="email" class="form-control" placeholder="Masukan Email Anda" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="alamat" class="col-4 col-form-label">Alamat</label>
                    <div class="col-8">
                        <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat Anda"></textarea>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="Telepon" class="col-4 col-form-label">Telepon</label>
                    <div class="col-8">
                        <input type="number" id="Telepon" name="Telepon" class="form-control" placeholder="Masukan Nomor Telepon Anda" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <div class="offset-4 col-8">
                        <input type="submit" name="proses" value="Submit" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>