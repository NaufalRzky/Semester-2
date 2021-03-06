<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .form-control {
            width: 400px;
        }
        .form-select {
            width: 400px;
        }
        .isi {
            margin-left: 400px;
            margin-top: 25px;
            width: 800px;
        }
    </style>
</head>
<body>
    <div class="bg-primary p-4">
    <h2 class="mt-2 text-light bg-primary">Sistem Penilaian</h2>
    </div>
    <div class="mx-4">
    <hr class="mb-0 mt-0">
    
    <form class="form-horizontal" method="POST" action="nilai_siswa.php">
    <fieldset>
    <hr class="mb-2 mt-0">
    <div class="isi">
        <div class="form-group">
        <div class="form-group row mb-2">
            <label for="" class="col-sm-3 col-form-label">Nama Lengkap </label>
            <div class="col-sm-9">
            <input type="text" name="nama" class="form-control" id="">
        </div>
        </div>
        <div class="form-group">
        <div class="form-group row mb-2">
            <label for="" class="col-sm-3 col-form-label">NIM </label>
            <div class="col-sm-9">
            <input type="text" name="nim" class="form-control" id="">
        </div>
        </div>
        <div class="form-group row mb-2">
            <label for="" class="col-sm-3 col-form-label">Mata Kuliah </label>
            <div class="col-sm-9">
            <select class="form-select mb-2" name="matkul" aria-label="Default select example">
            <option selected>Pilih</option>
            <option value="UI/UX">UI/UX</option>
            <option value="Basis Data">Basis Data</option>
            <option value="Pemrograman Web">Pemrograman Web</option>
            <option value="Bahasa Inggris">Bahasa Inggris</option>
            <option value="Statistik">Statistik</option>
            <option value="KE">Komunikasi Efektif</option>
            <option value="PPKn">PPKn</option>
            <option value="Jaringan Komputer">Jaringan Komputer</option>
            </select>
        </div>
        <div class="form-group">
        <div class="form-group row mb-2">
            <label for="" class="col-sm-3 col-form-label">Nilai UTS</label>
            <div class="col-sm-9">
            <input type="text" name="nilai_uts" class="form-control" id="">
        </div>
        </div>
        <div class="form-group">
        <div class="form-group row mb-2">
            <label for="" class="col-sm-3 col-form-label">Nilai UAS</label>
            <div class="col-sm-9">
            <input type="text" name="nilai_uas" class="form-control" id="">
        </div>
        </div>
        <div class="form-group">
        <div class="form-group row mb-2">
            <label for="" class="col-sm-3 col-form-label">Nilai Tugas/Praktikum</label>
            <div class="col-sm-9">
            <input type="text" name="nilai_tugas" class="form-control" id="">
        </div>
        </div>
        <div class="form-group row mb-2">
            <label for="" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
            <input type="submit" value="Simpan" name="proses" class="btn btn-primary"/>
        </div>
    
        </div>
    </fieldset>
    </form>
    <br/>
</div>
</body>
</html>