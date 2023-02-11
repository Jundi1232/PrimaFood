<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Karir Primafood</title>
</head>

<body class="bg-info">
    <div class="container mt-5">
        <p class="f-3 text-center text-uppercase text-ligth fw-bold">new register</p>
        <div class="border rounded-pill text-center mt-3 bg-white">
            <img src="../asset/Primafood1.png" alt="" height="50px"></a>
        </div>
        <div class="border mt-4 bg-white p-3">
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama Sesuai KTP</label>
                    <input type="text" class="form-control " id="nama" placeholder="Budi Sutomo">
                </div>
                <div class="col-md-6 ">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control " id="email" placeholder="budi@gmail.com">
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control " id="password" placeholder="minimal 8 karakter">
                </div>
                <div class="col-md-6">
                    <label for="konfirm" class="form-label">Konfirmasi Kata Sandi</label>
                    <input type="password" class="form-control " id="konfirm" placeholder="">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">No WhatsApp</label>
                    <input type="tel" class="form-control" id="inputCity">
                </div>
                <div class="col-md-2">
                    <label for="inputState" class="form-label">Tempat lahir</label>
                    <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="inputZip">
                </div>
                <div class="col-md-6">
                    <p for="inlineRadio1" class="form-label">Jenis Kelamin</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                        <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="inputPassword4" class="form-label">Tinggi badan</label>
                    <input type="number" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-3">
                    <label for="inputPassword4" class="form-label">Berat Badan</label>
                    <input type="number" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>