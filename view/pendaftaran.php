<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <script src="../assets/js/jquery.slim.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
</head>

<body>
  <!-- <div class="navbar"> -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  	<div class="container">
    <a class="navbar-brand p-2" href="#"></a>
      <img src="../assets/img/logo.png" height="64px">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active p-2">
                        <a class="nav-link" href="../">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">#</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">#</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">#</a>
                    </li>
  </nav>
  	<!-- Start Content -->
    <div class="container">
  <h3><center>Silahkan Registrasi</center></h3>
        <form style="padding-top:40px;"action="#" method="POST" class="form-horizontal">
          <div class="container" style="padding-top: 30px">
            <div class="form-group row">
              <label for="exampleFormControlTextarea1" class="col-2">NIK</label>
              <input type="number" class="form-control col-10" name="nik" placeholder="Masukkan NIK Anda">
            </div>
            <div class="form-group row">
                    <label for="exampleFormControlTextarea1" class="col-2">Nama Lengkap</label>
                    <input type="text" class="form-control col-10" name="nama" placeholder="Masukkan Nama Lengkap Anda">
            </div>
            <div class="form-group row">
                <label for="exampleFormControlTextarea1" class="col-2">Email</label>
                <input type="text" class="form-control col-10" name="email" placeholder="Masukkan Email Anda">
            </div>
              <div class="form-group row">
                <label for="exampleFormControlSelect1" class="col-2">Jenis Kelamin</label>
                <select class="form-control col-10" id="exampleFormControlSelect1" name="jk" placeholder="Jenis Kelamin">
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
              <div class="form-group row">
                <label for="exampleFormControlTextarea1" class="col-2">Alamat</label>
                <textarea class="form-control col-10" name="alamat" placeholder="Alamat Anda"></textarea>
              </div>
       <div class="form-group row">
              <label for="exampleFormControlTextarea1" class="col-2">Password</label>
              <input type="password" class="form-control col-10" name="password" placeholder="Password">
            </div>
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          </form>
      </div>
</html>