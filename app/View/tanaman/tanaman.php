<!DOCTYPE html>
<html>
<head>
    <title>Tanaman</title>
    <link rel="icon" type="image/png" href="../../gambar/ptpn.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
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

                    <li><a href="../../dashboard">Home <span class="sr-only">(current)</span></a></li>
                <?php if($_SESSION['level'] == 0) { ?>
                <li><a  href="../daftar" >Daftar User</a></li>
                <?php } ?>
                <li class="dropdown">
                    <a class="active" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Data <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="../pembibitan">Pembibitan</a></li>
                        <li><a href="../pemupukan">Pemupukan</a></li>
                        <li><a href="../lahan">Lahan</a></li>
                        <li><a href="../tanaman">Tanaman</a></li>
<!--                        <li><a href="../pupuk">Pupuk</a></li>-->
<!--                        <li><a href="../gudang">Gudang</a></li>-->
                    </ul>
                </li>
                <li><a href="../kondisi" >Kondisi</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="../logout.php"> Keluar </a></li>
            </ul>
        </div>
    </div> </nav>

<table class="table table-striped table-hover " >
    <thead>
    <tr class="success1">
        <td>ID</td>
        <td>Nama Tanaman</td>
        <td> Jenis Tanaman</td>
        <td> Periode Tanam (bulan)</td>

        <?php if($_SESSION['level'] == 0) { ?>
        <td> Action</td>
        <?php } ?>


    </tr>
    </tr>
    <?php while($row = $this->model->fetch($data)) {
        echo "<tr class=\"success4\" >
      <td > $row[0]</td >
      <td > $row[1] </td >
      <td > $row[2]</td >
      <td > $row[3]</td >";


    if($_SESSION['level'] == 0) {
      echo "<td>
        <a href = 'edit/?id=$row[0]' ><img src = '../../gambar/edit.png' ></a >
        <a href = 'delete.php?id=$row[0]' onclick='return confirm(\"Apakah anda ingin menghapus user dengan id $row[0]\");'><img src = '../../gambar/delete.png' ></a >
      </td >";
       }
    echo "</tr>";
    }
    ?>
    </thead>
</table>
<?php if($_SESSION['level'] == 0) { ?>
    <a href="#myModal" class="btn btn-success" data-toggle="modal" data-target="#AddModalBaru">Tambah</a>
<?php } ?>
</div>

<div class="modal fade" id="AddModalBaru" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Masukan Data Tanaman</h4>
            </div>

            <form method="POST" action="add.php" accept-charset="UTF-8" id="customer-add-form">
                <input type="hidden" name="_token" value="f9L6AppMj9goT82F8GzyWm16oQFPSBKO141oRI2h">
                <input type="hidden" name="mobil" value="10">
                <input type="hidden" name="subrental" value="2">
                <div class="modal-body">
                    <div class="box-body">

                        <div class="form-group">
                            <label for="customerName">Nama Tanaman :(wajib diisi)</label>
                            <input class="form-control" placeholder="Enter tanaman" data-rule-maxlength="250" required="1" name="nama_tanaman" type="text" value="">
                        </div>
                        <div class="form-group">
                            <label for="customerName">Jenis Tanaman :(wajib diisi)</label>
                            <input class="form-control" placeholder="Enter jenis" data-rule-maxlength="250" required="1" name="jenis_tanaman" type="text" value="">
                        </div>

                        <div class="form-group">
                            <label for="phoneNumber">Periode Tanam :(bulan)</label>
                            <input class="form-control" placeholder="Enter periode" data-rule-minlength="10" data-rule-maxlength="13" required="1" name="periode_tanaman" type="text" value="">
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input class="btn btn-success" type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../js/bootstrap.min.js"></script>
</body>


</html>