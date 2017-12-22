<!DOCTYPE html>
<html>
<head>
	<title>editUser</title>
  <link rel="icon" type="image/png" href="gambar/ptpn.png">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

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
        <li><a href="adminAwal.php">Home <span class="sr-only">(current)</span></a></li>
        <li class="active"><a> EditUser</a></li>
</ul>
</div>
</div>
</nav>



<form class="form-horizontal">
  <fieldset>
    <legend>Data Diri</legend>
    <div class="form-row">
    <div class="form-group">
      <label for="nama">Nama Lengkap</label>
      <input class="form-control" id="nama"  placeholder="Masukkan nama anda" type="text">
    </div>
    <div class="form-group ">
      <label for="tempat">Tempat Lahir</label>
      <input class="form-control" id="tempat"  placeholder="Tempat Lahir" type="text">
    </div>
     </div>
    <div class="form-group">
      <label for="date">Tanggal Lahir</label>
      <input type="date" class="form-control" id="tanggal"  placeholder="Tanggal" >
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Alamat</label>
      <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    </div>
 
    <div >
                                <div class="form-group">
                                <label for="jabatan"> Jabatan </label>
                                <select class="form-control" id="jabatan" name="jabatan">
                                    <option value="0">Admin Jampit</option>
                                    <option value="1">Tukang Kebun</option>
                                    <option value="2">Admin Gudang</option>
                                </select>
                            </div>
                        
                        </div>
 
    <div class="form-group">
      <label for="nama">Username</label>
      <input class="form-control" id="user"  placeholder="Username" type="text">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password">
    </div>
    <div class="form-group">
      <label for="nama">No Telepon</label>
      <input class="form-control" id="nama"  placeholder="NO Telepon" type="text">
    </div>
     <div class="form-group">
      <label for="email">Email</label>
      <input class="form-control" id="email"  placeholder="email" type="text">
    </div>
    
    <button type="submit" class="btn btn-primary">Ubah</button>
  </fieldset>
</form>