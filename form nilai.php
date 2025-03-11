<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">

                <form method="post" action="hasil-nilai.php">
                    <div class=" form-group row">
                        <label for="text" class="col-4 col-form-label">Text Field</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                </div>
                                <input id="text" name="text" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Mahasiswa</label>
                        <div class="col-8">
                            <input id="nama" name="nama" placeholder="Masukkan nama lengkap" type="text"
                                class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-4 col-form-label">MATAKULIAH</label>
                        <div class="col-8">
                            <select id="matkul" name="matkul" class="custom-select" required="required">
                                <option value="PEMWEB">PEMWEB</option>
                                <option value="BASIS DATA">BASIS DATA</option>
                                <option value="JARKOM">JARKOM</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nim" class="col-4 col-form-label">NIM</label>
                        <div class="col-8">
                            <input id="nim" name="nim" placeholder="masukkan nim anda" type="text" class="form-control"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rombel" class="col-4 col-form-label">Rombel</label>
                        <div class="col-8">
                            <input id="rombel" name="rombel" placeholder="masukkan rombel anda" type="text"
                                class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai tugas" class="col-4 col-form-label">Nilai Tugas</label>
                        <div class="col-8">
                            <input id="tugas" name="tugas" placeholder="masukkan niali tugas" type="text"
                                class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai uts" class="col-4 col-form-label">Nilai UTS</label>
                        <div class="col-8">
                            <input id="uts" name="uts" placeholder="masukkan nilai uts" type="text" class="form-control"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai uas" class="col-4 col-form-label">Nilai UAS</label>
                        <div class="col-8">
                            <input id="uas" name="uas" placeholder="masukkan nilai uas anda" type="text"
                                class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>