<!DOCTYPE html>
<html>
<head>
	<title>Admin Awal</title>
  <link rel="icon" type="image/png" href="gambar/ptpn.png">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

	<div class="atas" >
  <div class="container text-center">
    <h1>PT Perkebunan Nusantara XII</h1>      
     </div>
</div>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Siperka</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav link-effect">
        <li class="active" ><a href="adminAwal.php">Home <span class="sr-only">(current)</span></a></li>
        <li ><a href="daftar.php">Daftar User</a></li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Data <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="pembibitan.php">Pembibitan</a></li>
            <li><a href="pemupukan.php">Pemupukan</a></li>
             <li><a href="lahan.php">Lahan</a></li>
              <li><a href="tanaman.php">Tanaman</a></li>
               <li><a href="pupuk.php">Pupuk</a></li>
                <li><a href="gudang.php">Gudang</a></li>
          </ul>
        </li>
        <li><a href="kondisi.php">Kondisi</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"> Keluar </a></li>
      </ul>
    </div>
  </div>
</nav>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>


</html>