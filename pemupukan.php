<!DOCTYPE html>
<html>
<head>
	<title>Pemupukan</title>
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
        <li><a href="daftar.php">Daftar User</a></li>
          <li class="dropdown" class="active">
          <a class="active" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Data <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li class="active"><a href="pembibitan.php">Pembibitan</a></li>
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
  </div> </nav>

 <table class="table table-striped table-hover " >
  <thead>
     <tr class="success1">
      <td>ID pemupukan</td>
      <td>Tanggal Pembibitan</td>
      <td> Nama Pupuk </td>
      <td> Volume Pupuk</td>
      <td> Nama lahan </td>
      <td> Nama Tanaman </td>
      <td> Status </td>
      
      <td> Action  </td>
   
    </tr>
    </tr>
    <tr class="success4">
      <td>101</td>
      <td>09 - 05 - 1997</td>
      <td>urea</td>
      <td>1kg</td>
      <td> sakura </td>
      <td> kakao super </td>
      <td> belum dipupuk </td>
          <td>
        <a href="#"><img src="gambar/edit.png"></a>
        <a href="#"><img src="gambar/delete.png"></a>
      </td>
    </tr>
  </thead>
 </table>
   <a href="#myModal" class="btn btn-success" data-toggle="modal" data-target="#AddModalBaru">Tambah</a>

 </div>

<div class="modal fade" id="AddModalBaru" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Masukan data User baru</h4>
            </div>
          
           <!--  <form method="POST" action="https://rental.gundrock.cf/order_mobil" accept-charset="UTF-8" id="customer-add-form" enctype="multipart/form-data"> -->
                <input type="hidden" name="_token" value="f9L6AppMj9goT82F8GzyWm16oQFPSBKO141oRI2h">
                <input type="hidden" name="mobil" value="10">
                <input type="hidden" name="subrental" value="2">
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="customerName">Tanggal Pemupukan :(wajib diisi)</label>
                            <input class="form-control" placeholder="Enter Tanggal pemupukan" data-rule-maxlength="250" required="1" name="customerName" type="date" value="">
                        </div>
                        <div class="form-group">
                            <label for="customerName">Nama Pupuk (wajib diisi)</label>
                            <input class="form-control" placeholder="Enter pupuk" data-rule-maxlength="250" required="1" name="customerName" type="text" value="">
                        </div>
                        <div class="form-group">
                            <label for="customerName">Volume pupuk (wajib diisi)</label>
                            <input class="form-control" placeholder="Enter volume pupuk" data-rule-maxlength="250" required="1" name="customerName" type="text" value="">
                        </div>
                       
                        <!-- <div class="row">
                                <div class="form-group col-md-12">
                                <label for="tambahan">Jabatan </label>
                                <select class="form-control" id="jabatan" name="jabatan">
                                    <option value="0">ADMIN Jampit</option>
                                    <option value="1">tukang kebun</option>
                                </select>
                            </div> -->
                        </div>
                        <div class="form-group">
                            <label for="customerName">Nama Lahan (wajib diisi)</label>
                            <input class="form-control" placeholder="Enter username" data-rule-maxlength="250" required="1" name="customerName" type="text" value="">
                        </div>
                        <div class="form-group">
                            <label for="customerName">Nama Tanaman :(wajib diisi)</label>
                            <input class="form-control" placeholder="Enter Nama tanaman" data-rule-maxlength="250" required="1" name="customerName" type="text" value="">
                        </div>
                         <div class="row">
                                <div class="form-group col-md-12">
                                <label for="tambahan"> Status </label>
                                <select class="form-control" id="jabatan" name="jabatan">
                                    <option value="0">belum dibibit</option>
                                    <option value="1">proses dibibit</option>
                                    <option value="2">selesai dibibit</option>
                                </select>
                            </div>
                        
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input class="btn btn-success" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>


</html>