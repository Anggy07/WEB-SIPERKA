<!DOCTYPE html>
<html>
<head>
    <title>edit Lahan</title>
    <link rel="icon" type="image/png" href="../../../gambar/ptpn.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

    <!-- Bootstrap -->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/style.css" rel="stylesheet">
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
            <a class="navbar-brand" href="#"><?php echo $_SESSION['name'];?></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav link-effect">
                <li><a href="adminAwal.php">Home <span class="sr-only">(current)</span></a></li>
                <li class="active"><a> Edit Lahan</a></li>
            </ul>
        </div>
    </div>
</nav>



<form class="form-horizontal" action="index.php?id=<?=$row[0]?>" method="POST">
    <input type="hidden" name="id" value="<?=$row[0]?>">
    <fieldset>
        <legend>Data Lahan</legend>
        <div class="form-row">
            <div class="form-group">

                <div class="form-group">
                    <label for="customerName">Nama Lahan :(wajib diisi)</label>
                    <input class="form-control" placeholder="Enter lahan" data-rule-maxlength="250" required="1" name="nama_lahan" type="text" value="<?=$row[1]?>">
                </div>
                <div class="form-group">
                    <label for="customerName">Luas Lahan :(wajib diisi)</label>
                    <input class="form-control" placeholder="Enter luas" data-rule-maxlength="250" required="1" name="luas_lahan" type="text" value="<?=$row[2]?>">
                </div>

                <div class="form-group">
                    <label for="phoneNumber">Ph Tanah :(wajib diisi)</label>
                    <input class="form-control" placeholder="Enter ph" data-rule-minlength="10" data-rule-maxlength="13" required="1" name="ph_tanah" type="text" value="<?=$row[3]?>">
                </div>
        </div>

            <button type="submit" name="submit" value="submit" class="btn btn-primary">Ubah</button>
    </fieldset>
</form>