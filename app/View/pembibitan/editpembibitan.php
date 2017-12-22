<!DOCTYPE html>
<html>
<head>
    <title>edit Pembibitan</title>
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
                <li><a href="../adminAwal">Home <span class="sr-only">(current)</span></a></li>
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
                <?php if($_SESSION['level'] == 0) { ?>
                <div class="form-group">
                    <input type="hidden" name="status" value="<?=$row[4]?>">
                    <label for="customerName">Tanggal Pembibitan :(wajib diisi)</label>
                    <input class="form-control" placeholder="Enter bibit" data-rule-maxlength="250" required="1" name="tgl_pembibitan" type="date" value="<?=$row[1]?>">
                </div>
                <?php } ?>
                <?php if($_SESSION['level'] == 0) { ?>
                <div class="row">
                    <div class="form-group col-md-12">
                        <input type="hidden" name="status" value="<?=$row[4]?>">
                        <label for="tambahan"> Nama Tanaman </label>
                        <select class="form-control"  name="nama_tanaman" value="<?=$row[2]?>">
                            <?php while($x = $this->model->fetch($tanaman)) {
                                echo "<option value = '$x[1]' > $x[1] </option >";
                            } ?>
                        </select>
                    </div>
                </div>
                <?php } ?>
                <?php if($_SESSION['level'] == 0) { ?>
                <div class="row">
                    <div class="form-group col-md-12">
                        <input type="hidden" name="status" value="<?=$row[4]?>">
                        <label for="tambahan"> Nama Lahan </label>
                        <select class="form-control"  name="nama_lahan" value="<?=$row[3]?>">
                            <?php while($x = $this->model->fetch($lahan)) {
                                echo "<option value = '$x[1]' > $x[1] </option >";
                            } ?>
                        </select>
                    </div>
                </div>
                <?php } ?>
                <?php if($_SESSION['level'] == 1) { ?>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="tambahan"> Status </label>
                            <input type="hidden" name="id_pembibitan" value="<?=$row[0]?>">
                            <input type="hidden" name="nama_tanaman" value="<?=$row[2]?>">
                            <input type="hidden" name="tgl_pembibitan" value="<?=$row[1]?>">
                            <input type="hidden" name="nama_lahan" value="<?=$row[3]?>">
                            <select class="form-control" id="status" name="status" value="<?=$row[4]?>">
                                <option value="belum diproses">belum diproses</option>
                                <option value="sedang diproses">sedang diproses</option>
                                <option value="sudah diproses">sudah diproses</option>
                            </select>
                        </div>
                    </div>
                <?php } ?>

            <button type="submit" name="submit" value="submit" class="btn btn-primary">Ubah</button>
    </fieldset>
</form>