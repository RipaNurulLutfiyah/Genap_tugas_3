<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <form action="nilai.php" method="post">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                    <div class="col-8">
                        <input id="nama" name="namasiswa" placeholder="Nama Lengkap" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matakuliah" class="col-4 col-form-label">Mata Kuliah</label>
                    <div class="col-8">
                        <select id="matakuliah" name="matkul" class="custom-select">
                            <option value="">Pilih Mata Kuliah</option>
                            <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                            <option value="Basis Data I">Basis Data I</option>
                            <option value="Pemrograman Web">Pemrograman Web</option>
                            <option value="Pemrograman Web">B. Inggris</option>
                            <option value="Pemrograman Web">Komunikasi Efektif</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keaktifan" class="col-4 col-form-label">Nilai keaktifan</label>
                    <div class="col-8">
                        <input id="keaktifan" name="keaktifan" placeholder="Keaktifan" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="praktikum" class="col-4 col-form-label">Nilai Praktikum</label>
                    <div class="col-8">
                        <input id="praktikum" name="praktikum" placeholder="Praktikum" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="presensi" class="col-4 col-form-label">Presensi</label>
                    <div class="col-8">
                        <input id="presensi" name="presensi" placeholder="Presensi" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button id="submit" name="submit" type="submit"  class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
            <hr>
        </div>
    </div>
</div>
</body>
</html>