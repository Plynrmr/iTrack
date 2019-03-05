<?php
	require "loginheader.php";
?>

<main>
<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center align-items-center" style="height:60vh" >
      <div class="col-4">
        <div class="card">
          <div class="card-body">

            <form action="homeitrack.php" method="post" >
              <h4 class"loginheader" align="center">iTrack Login</h4>
              <div class="form-group">
                <b>Username</b> <input type="text" class="form-control" name="username">
              </div>
              <div class="form-group">
                <b>Password</b><input type="password" class="form-control" name="password">
              </div>
              <div align="center">
                <button  type="submit" id="sendlogin" class="btn btn-primary" formaction="/homeitrack.php">
                  <?php echo '<a href= "homeitrack.php" style="color:white;text-decoration:none" > Sign In</a>';?>
                </button>
              </div>
            </form>

            <div align="center" class="psw"><a href="#">Forgot password?
          </a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</main>

<?php
	require "viewingfooter.php";
?>
