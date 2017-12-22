<!DOCTYPE html>
<html>
<head>
    <title>edit Pemupukan</title>
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
                <li class="active"><a> Edit pemupukan</a></li>
            </ul>
        </div>
    </div>
</nav>



<form class="form-horizontal" action="index.php?id=<?=$row[0]?>" method="POST">
    <input type="hidden" name="id" value="<?=$row[0]?>">
    <fieldset>
        <legend>Data Pemupukan</legend>
        <div class="form-row">
            <div class="row">
                <?php if($_SESSION['level'] == 0) { ?>
                <div class="form-group col-md-12">
                    <input type="hidden" name="status" value="<?=$row[5]?>">
                    <label for="tambahan"> ID PEMBIBITAN </label>
                    <select class="form-control"  name="id_pembibitan" value="<?=$row[1]?>">
                        <?php while($x = $this->model->fetch($id_pembibitan)) {
                            echo "<option value = '$x[0]' > $x[0] </option >";
                        } ?>
                    </select>
                </div>
                <?php } ?>
            </div>
            <div class="form-group">
                <?php if($_SESSION['level'] == 0) { ?>
                <input type="hidden" name="status" value="<?=$row[5]?>">
                <label for="customerName">Tanggal Pupuk:(wajib diisi)</label>
                <input class="form-control" placeholder="Enter pemupukan" data-rule-maxlength="250" required="1" name="tgl_pemupukan" type="date" value="<?=$row[2]?>">
            </div>
            <?php } ?>
            <?php if($_SESSION['level'] == 0) { ?>
            <div class="row">
                <div class="form-group col-md-12">
                    <input type="hidden" name="status" value="<?=$row[5]?>">
                    <label for="tambahan"> Nama Pupuk </label>
                    <select class="form-control" id="jabatan" name="nama_pupuk" value="<?=$row[3]?>">
                        <option value="SUPERNASA">SUPERNASA</option>
                        <option value="NUTRISION">NUTRISION</option>
                        <option value="KALSIUM"> KALSIUM</option>
                        <option value="DOLOMIT">DOLOMIT</option>
                        <option value="KLORIDA">KLORIDA</option>
                        <option value="NPK "> NPK </option>
                    </select>
                </div>
            </div>
            <?php } ?>
            <?php if($_SESSION['level'] == 0) { ?>
            <div class="form-group">
                <input type="hidden" name="status" value="<?=$row[5]?>">
                <label for="customerName">Volume Pupuk :(/gram/ml)</label>
                <input class="form-control" placeholder="Enter volume" data-rule-maxlength="250" required="1" name="vol_pupuk" type="text" value=" <?=$row[4]?>">
            </div>
            <?php } ?>

            <?php if($_SESSION['level'] == 1) { ?>
                <div class="row">
                    <div class="form-group col-md-14">
                        <label for="tambahan"> Status </label>
                        <input type="hidden" name="id" value="<?=$row[0]?>">
                        <input type="hidden" name="id_pembibitan" value="<?=$row[1]?>">
                        <input type="hidden" name="tgl_pemupukan" value="<?=$row[2]?>">
                        <input type="hidden" name="nama_pupuk" value="<?=$row[3]?>">
                        <input type="hidden" name="vol_pupuk" value="<?=$row[4]?>">
                        <select class="form-control" id="status" name="status" value="<?=$row[5]?>">
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