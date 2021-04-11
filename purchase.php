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

    <!-- Purchase Section -->
    <div class="container ">
        <div class="py-5 text-center">
            <img src="https://www.flaticon.com/svg/vstatic/svg/3068/3068845.svg?token=exp=1618076733~hmac=5cc92d72e899837b1369f9ad3f77f119" alt="#spasikom" width="92px" height="128px" >
            <h2>STRUK Pembelian</h2>
            <p>Ini adalah Struk Pemesanan yang anda lakukan.</p>
        </div>
    </div>

    <div class="container ">
      <hr class="my-4">
        <div class="py-5 text-center">
        <h3>Terima Kasih Atas pembeliannya,<?php echo $_POST["gender"]; ?> <?php echo $_POST["nama"]; ?></h3>
        </div>
    <h4 class="mb-4"><i>Pemesanan :</i></h4>
    <form>
      <div class="row">
          <fieldset disabled>
              <div class="col-sm-6 mb-2">
                  <label for="disabledTextInput" class="form-label">Nama Pembeli</label>
                  <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $_POST["nama"]; ?>">
              </div>

              <div class="col-sm-6 mb-2">
                  <label for="disabledTextInput" class="form-label">Email</label>
                  <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $_POST["email"]; ?>">
              </div>

              <div class="col-sm-6 mb-2">
                  <label for="disabledTextInput" class="form-label">Alamat</label>
                  <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $_POST["alamat"]; ?>">
              </div>

          </fieldset>
      </div>
      </form>

      <hr class="my-4">
      <div class="row">
        <div class="col-sm-3">
          <p>Processor :</p>
        </div>
        <div class="col-sm-9">
          <p><?php echo $_POST["Processor"]; ?></p>
        </div>

        <div class="col-sm-3">
          <p>RAM :</p>
        </div>
        <div class="col-sm-9">
          <p><?php echo $_POST["ram"]; ?></p>
        </div>

        <div class="col-sm-3">
          <p>Storage :</p>
        </div>
        <div class="col-sm-9">
          <p><?php   foreach($_POST["storage"] as $value)
          {
            echo $value." ";
          }?></p>
          </div>

        <div class="col-sm-3">
          <p>VGA :</p>
        </div>
        <div class="col-sm-9">
          <p><?php echo $_POST["vga"]; ?></p>
        </div>

        <div class="col-sm-3">
          <p>PSU :</p>
        </div>
        <div class="col-sm-9">
          <p><?php echo $_POST["PSU"]; ?></p>
        </div>

        <div class="col-sm-12">
          <a class="py-3" href="index.html">Kembali</a>
        </div>

      </div>
    </div>

</body>

</html>
<?php

if(!isset($_POST["nama"]) || !isset($_POST["gender"]) || !isset($_POST["email"]) || !isset($_POST["alamat"]))
{
    header("Location: purchase.php");
    exit;
}
?>