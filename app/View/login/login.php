<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>login</title>
    <link rel="icon" type="image/png" href="../gambar/ptpn.png">

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="seluruh">
    <div class="login-atas">
      <div class="form-group">
        <p>Selamat datang</p>
      </div>
    </div>
    <div >
    <form action="" method="POST" class="form-horizontal1">
      <div class="form-group">
        <label class="col-sm-2 control-label"> Username</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Username" name="username">
        </div>     
      </div>
      <br>
      <br>
      <div class="form-group">
        <label class="col-sm-2 control-label"> Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" placeholder="Password" name="password">
        </div>     
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label>
              <input type="checkbox" > Remember Me
            </label>
          </div>        
        </div>      
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <input name="submit" value="Login" type="submit" class="btn btn-default">
        </div>
      </div>   
    </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>