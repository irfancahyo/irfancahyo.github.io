<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar Section -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#"><img src="https://www.flaticon.com/svg/vstatic/svg/3919/3919960.svg?token=exp=1618064874~hmac=834984a95b4e221e908648aa5f1b2f93" alt="#logo-nav" width="36px" height="44px"> Spasikom</a>
  </div>
</nav>

    <!-- Dashboard Section -->
    <div class="container">
        <div class="py-5 text-center">
            <img src="https://www.flaticon.com/svg/vstatic/svg/1055/1055646.svg?token=exp=1618064874~hmac=641a4b1eae0f2330524a16b6c5df2612" alt="#spasikom" width="92px" height="128px" >
            <h2>Spasi Komputer</h2>
            <p>Spasi Komputer menjual kebutuhan komputer, PC rakitan, Processor, VGA, RAM termurah dan terlengkap di Cibiru</p>
        </div>
    </div>

    <div class="container mb-4">
            
            <hr class="my-4">
            <h4 class="mb-4"><i>Pemesanan :</i></h4>

            <form action="purchase.php" method="POST" class="g-3 needs-validation" novalidate>
                <div class="row">
                    <div class="col-sm-6 mb-2">
                        <label for="validationCustomNama" class="form-label">Nama Pembeli</label>
                        <input name="nama" id="validationCustomNama" type="text" class="form-control" placeholder="Your Name" required >
                        <div class="invalid-feedback">
                            Silahkan isi Nama dengan benar.
                        </div>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <label for="validationCustomEmail" class="form-label">Email</label>
                        <input name="email" id="validationCustomEmail" type="email" class="form-control" placeholder="Your Email" required >
                        <div class="invalid-feedback">
                            Silahkan isi Email dengan benar.
                        </div>
                    </div>
                    <div class="col-sm-12 mb-2">
                        <label for="validationCustomAlamat" class="form-label">Alamat</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">#</span>
                            <input name="alamat" type="text" class="form-control" id="validationCustomAlamat" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Silahkan isi Alamat dengan benar.
                        </div>
                    </div>
                    <div class="col-sm-12 mb-2">
                        <label for="gender" class="form-label">Jenis Kelamin</label>

                                <select name="gender" class="form-select" aria-label="Default select example" required>
                                    <option selected disabled value="">Jenis Kelamin</option>
                                    <option value=" Tn. ">Pria</option>
                                    <option value=" Ny. ">Wanita</option>
                                </select>
                    </div>
                </div>
    </div>

    <hr class="my-4">

    <div class="container mb-4">
            <h4 class="mb-4"><i>Spec Komputer :</i></h4>

                <div class="row">
                    <div class="col-sm-12 mb-2">
                        <label for="Processor" class="form-label">Processor</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Processor" id="Intel" value="Intel" checked>
                                <label class="form-check-label" for="Intel">
                                    Intel
                                </label>
                            </div>
                            
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Processor" id="AMD" value="AMD">
                                <label class="form-check-label" for="AMD">
                                    Amd
                                </label>
                            </div>
                    </div>

                    <div class="col-sm-12 mb-2">
                        <label for="RAM" class="form-label">RAM</label>

                                <select name="ram" class="form-select" aria-label="Default select example" required>
                                    <option selected disabled value="">Pilih RAM</option>
                                    <option value="4 GB">4 GB</option>
                                    <option value="8 GB">8 GB</option>
                                    <option value="16 GB">16 GB</option>
                                </select>
                    </div>

                    <div class="col-sm-12 mb-2">
                        <label for="Storage" class="form-label">Storage</label>
                            <div class="form-check">
                                <input name="storage[]" class="form-check-input" type="checkbox" value="Solid State Drive (SSD)" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Solid State Drive (SSD)
                                </label>
                            </div>

                            <div class="form-check">
                                <input name="storage[]" class="form-check-input" type="checkbox" value="Hard Disk Drive (HDD)" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Hard Disk Drive (HDD)
                              </label>
                            </div>
                    </div>

                    <div class="col-sm-12 mb-2">
                        <label for="VGA" class="form-label">VGA</label>

                                <select name="vga" class="form-select" aria-label="Default select example" required>
                                    <option selected disabled value="">Pilih VGA</option>
                                    <option value="4 GB">4 GB</option>
                                    <option value="8 GB">8 GB</option>
                                    <option value="16 GB">16 GB</option>
                                </select>
                    </div>

                    <div class="col-sm-12 mb-2">
                        <label for="PSU" class="form-label">PSU</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="PSU" id="550W" value="550W" checked>
                                <label class="form-check-label" for="550W">
                                    550W
                                </label>
                            </div>
                            
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="PSU" id="750W" value="750W">
                                <label class="form-check-label" for="750W">
                                    750W
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="PSU" id="1000W" value="1000W">
                                <label class="form-check-label" for="1000W">
                                    1000W
                                </label>
                            </div>
                    </div>

                    <div class="col-sm-12 mt-3 mb-3">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
    </div>
</body>

<script src="script.js"></script>

</html>