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
    <a class="navbar-brand" href="#"></a>
      <img src="../assets/img/logo.png" height="64px">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Entri Data
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">#</a>
            <a class="dropdown-item" href="#">#</a>
            <a class="dropdown-item" href="#">#</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">#</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="login.php">Login</a>
        </li>
    </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
  </div>
    </div>
  </nav>
  	<!-- Start Content -->
  		<br>
  		<H3><center>Silahkan Login</center></H3>
  		<br>
    	<div class="container">
		<div id="wrapper" align="center">
			<table>
				<tr>
					<td width="100">NIK</td>
					<td><input type="number" name="nik" title="Nik" class="form-login" size="30" maxlength="100" placeholder="Masukkan NIK" /></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" title="Passsword" class="form-login" size="20" maxlength="100" placeholder="Password" /></td>
				</tr>
				<tr>
					<td></td>
					<td>
            			<button type="submit" class="btn btn-primary">Login</button>
            		</td>
				</tr>
			</table>
		</div>
		<p><center></center>
      </div>
</html>