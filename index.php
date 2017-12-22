<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>SIPERKA</title>
   <link rel="icon" type="image/png" href="gambar/ptpn.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
   /*kotak pembatas, batasan*/
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }

 /* gerak foto atas*/
  .carousel-inner img {
      /*-webkit-filter: grayscal
      e(90%);
      /*filter: grayscale(90%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #c47d03;
      color: #302014;
  }
  .bg-1 h3 {color: #302014;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  } 

 /* popup*/
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }

  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #bc7d09;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  /*warna tulisan sebelum dipencet*/
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  /*saat mencet berubah warna*/
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  /*yang aktif*/
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
    cursor: pointer;
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  </style>
</head>



<!-- ************ CSS *********** -->


<!--<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">-->

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>

<!-- <a class="navbar-brand" href="#logo">Logo</a> -->
<!-- 
 <img src="pict/blue.jpg" alt="Paris" width="400" height="300"> -->
      <a href="#logo" data-toggle="collapse">
        <img src="gambar/cocoa.png" alt="Random Name" width="200" height="50">
      </a>
      

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home">BERANDA</a></li>
        <li><a href="#about">TENTANG</a></li>
        <li><a href="#tour">INFO</a></li> 
       
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">SILAHKAN MASUK 
          <span class="caret"></span></a>

          <ul class="dropdown-menu">
          <li><a <a href="login">MASUK</a></li>
            <!-- <li><a data-toggle="modal" data-target="#registrasi">Registrasi</a></li> -->
           
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>


<!-- LOGIN -->

<!-- <div id="login" class="bg-1"> -->
<!-- Modal -->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
     <!--  -->
    </div>
  </div>



<!-- REGISTRASI -->

<!--  -->
</div>


<div id="home" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   <!--  <ol class="carousel-indicators">
      <li data-target="#home" data-slide-to="0" class="active"></li>
      <li data-target="#home" data-slide-to="1"></li>
      <li data-target="#home" data-slide-to="2"></li>
      <li data-target="#home" data-slide-to="3"></li>
    </ol>
 -->

    <!-- Wrapper for slides \\ rubah foto -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="gambar/13.jpg" alt=" ----  " width="1200" height="700">
      <p>----</p>
      </div>

      <div class="item">
        <img src="gambar/14.jpg" alt=" ---- " width="1200" height="700">
        <div class="carousel-caption">
       
          <p>----</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="gambar/12.jpg" alt=" --- " width="1200" height="700">
        <div class="carousel-caption">
      
          <p>----</p>
        </div>      
      </div>
    

      <div class="item">
        <img src="gambar/11.jpg" alt=" --- " width="1200" height="700">
        <div class="carousel-caption">
        
          <p>---</p>
        </div>      
      </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="about" class="container text-center">
  <h3>SEJARAH SINGKAT</h3>
   <p><img src="pict/ptpn.png" width="100" height="100"></p>
  <p>PT Perkebunan Nusantara XII  yang disebut PTPN XII adalah Perseroan Terbatas dengan komposisi kepemilikan sahamnya meliputi Negara 10% dan PT Perkebunan Nusantara III (Persero) 90%.</p>

<p>PTPN XII didirikan berdasarkan Peraturan Pemerintah Republik Indonesia Nomor 17 Tahun 1996 tentang Peleburan PT Perkebunan Nusantara XXIII (Persero),  PT Perkebunan Nusantara XXVI (Persero), dan PT Perkebunan Nusantara XXIX (Persero) yang dituangkan dalam Akta Pendirian No. 45 tanggal 11 Maret 1996, dibuat di hadapan Harun Kamil, S.H., Notaris di Jakarta dan telah disahkan Menteri Kehakiman Republik Indonesia sesuai Keputusan Nomor C2.8340 HT.01.01.Th 96 tanggal 8 Agustus 1996.</p><p>

Anggaran Dasar Perseroan telah disesuaikan dengan Undang-undang Nomor 40 Tahun 2007 tentang Perseroan Terbatas sebagaimana dinyatakan dalam Akta Nomor 30 tanggal 16 Agustus 2008  jo. Akta Nomor 4 tanggal 4 Maret 2009 dan telah mendapat persetujuan dari Menteri Hukum dan Hak Asasi Manusia sesuai Keputusan Menteri Hukum dan HAM RI Nomor AHU-42776.AH.01.Tahun 2009 tanggal 1 September 2009.</p><p>

Selanjutnya Anggaran Dasar Perseroan telah beberapa kali mengalami perubahan, terakhir diubah dengan Akta Nomor 32 tanggal 23 Oktober 2014 yang dibuat di hadapan Nanda Fauz Iwan, S.H., M.Kn., Notaris di Jakarta Selatan dan telah diterima pemberitahuannya oleh Menteri Hukum dan Hak Asasi Manusia sesuai surat Nomor AHU-08635.40.21.2014 tanggal 19 November 2014.</p>
  <br>
  </div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">VISI</h3>
    <p class="text-center">"Menjadi Perusahaan Agribisnis yang berdaya saing tinggi dan mampu tumbuh-kembang berkelanjutan"</p><br>
     <h3 class="text-center">MISI</h3>
     <p class="text-center">Melaksanakan reformasi bisnis, strategi, struktur, dan budaya perusahaan untuk mewujudkan profesionalisme berdasarkan prinsip-prinsip good corporate governance.</p><p class="text-center">
     Meningkatkan nilai dan daya saing perusahaan (competitive advantage) melalui inovasi serta peningkatan produktivitas dan efisiensi dalam penyediaan produk berkualitas dengan harga kompetitif.</p><p class="text-center">
     Menghasilkan laba yang dapat membawa perusahaan tumbuh dan berkembang untuk meningkatkan nilai bagi shareholders dan stakeholders lainnya.</p><p class="text-center">
     Mengembangkan usaha agribisnis dengan tata kelola yang baik serta peduli pada kelestarian alam dan tanggung jawab sosial pada lingkungan usaha (community development).</p>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <!-- <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-ok"></span> pengumuman</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
              <button type="submit" class="btn btn-block">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-chevron-left"></span> back
          
        </div>
      </div> -->
    </div>
  </div>
</div>
</html>