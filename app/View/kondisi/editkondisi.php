<!DOCTYPE html>
<html>
<head>
    <title>edit Kondisi</title>
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
                <li class="active"><a> EditKondisi</a></li>
            </ul>
        </div>
    </div>
</nav>



<form class="form-horizontal" action="index.php?id=<?=$row[0]?>" method="POST">
    <input type="hidden" name="id" value="<?=$row[0]?>">
    <fieldset>
        <legend>Data Kondisi</legend>
        <div class="form-row">
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="tambahan"> ID PEMBIBITAN </label>
                    <select class="form-control"  name="id_pembibitan" value="<?=$row[1]?>">
                        <?php while($x = $this->model->fetch($id_pembibitan)) {
                            echo "<option value = '$x[0]' > $x[0] </option >";
                        } ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="nama">Kondisi Pohon</label>
                <input class="form-control" id="kondisi_pohon"  placeholder="kondisi" type="text" name="kondisi_pohon" value="<?=$row[2]?>">
            </div>
            <div class="form-group ">
                <label for="tempat">Kondisi Bunga</label>
                <input class="form-control" id="kondisi_bunga"  placeholder="kondisi" type="text" name="kondisi_bunga" value="<?=$row[3]?>">
            </div>
            <div class="form-group ">
                <label for="tempat">Kondisi Buah</label>
                <input class="form-control" id="kondisi_buah"  placeholder="kondisi" type="text" name="kondisi_buah" value="<?=$row[4]?>">
            </div>
        </div>



        <button type="submit" name="submit" value="submit" class="btn btn-primary">Ubah</button>
    </fieldset>
</form>