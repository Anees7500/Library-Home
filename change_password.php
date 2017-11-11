





<!DOCTYPE Html>
<html lang="en">
<head>
  <title>Library | Password</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width-device-width scale=1.0" />
  <link rel="shortcut icon" href="image/user.png" ></link>
  <link rel="stylesheet" href="css/style.css" ></link>
  <link rel="stylesheet" href="css/circle-hover.css" ></link>
  <link rel="stylesheet" href="css/bootstrap.min.css" ></link>
  <script type="text/javascript" src="js/script.js" ></script>
  <script type="text/javascript" src="js/jquery.min.js" ></script>
  <script type="text/javascript" src="js/bootstrap.min.js" ></script>
  <script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
</head>
<body>
  <div class="container-fluid" id="bg_1">
    <div id="corner" style="margin-left:90%;inline:block;">
      <a href="home.php?q="><img src="image/home.png" style="border:solid 1px black;margin-top:1%;" class="img-responsive" width="25%" height="25%" /></a>
      <a href="index.php"><img src="image/logout_1.png" style="border:solid 1px black;margin-top:-25.7%;margin-left:30%;" class="img-responsive" width="25%" height="25%" /></a>
    </div>
    <div class="container" id="bg_1">
      <center>
           <a href="#"><img src="image/logo.png" style="border-radius:50%;margin-top:4%;" class="img-responsive" width="12%" height="12%" /></a>
           <p id="para">Departmental Library</p>
           <p id="para_id">Department of Computer Application (CA)</p>
      </center>
    </div>
    <div class="container"  id="bg_1">
      <center><div class="modal-content" style="width:35%;margin-left:-38%;" id="bg_form">
      <div class="modal-body">
        <form role="form" method="post" action="" enctype="multiplepart/form">
          <div class="form-group">
              <span class='label label-info' id="n">  Enter Current Password </span>
              <input type="password" name="consumer" class="form-control" placeholder="Enter Username..." style="width:90%;"  />
            </div>
            <div class="form-group">
              <span class='label label-info' id="n">  Enter New Password </span>
              <input type="text" name="consumer" class="form-control" placeholder="Enter Password..." style="width:90%;"  />
            </div>
            <div class="form-group">
              <span class='label label-info' id="n">  Confirm New Password </span>
              <input type="text" name="consumer" class="form-control" placeholder="Enter Password..." style="width:90%;"  />
            </div>
      </div>
      <div class="modal-footer">
        <input type="submit" name="submit_feedback" id="bt" class="btn btn-primary btn-block" value="Update"  style="width:172%; margin-left:-36%;"/>
      </div>
      </form>
    </div></center>
    <center>
      <div class="modal-content" style="width:35%;margin-left:39%;margin-top:-28.5%;" id="bg_form" style="float:right;">
    <div class="modal-body">
      <form role="form" method="post" action="" enctype="multiplepart/form">
        <div class="form-group">
            <span class='label label-info' id="n">  Username </span>
            <input type="text" name="username" class="form-control" value="" style="width:90%;"  />
          </div>
          <div class="form-group">
            <span class='label label-info' id="n">  Email </span>
            <input type="email" name="email" class="form-control" value="" style="width:90%;"  />
          </div>
          <div class="form-group">
            <span class='label label-info' id="n">  Enter Current Password </span>
            <input type="password" name="password" class="form-control" placeholder="Enter Password..." style="width:90%;"  />
          </div>
    </div>
    <div class="modal-footer">
      <input type="submit" name="update_register" id="bt" class="btn btn-primary btn-block" value="Update"  style="width:170%; margin-left:-36%;"/>
    </div>
    </form>
  </div>
</center>
  </div>
  <center>
         <p id="footer">Devloped By</p>
         <p id="footer_id">Anees sk</p>
         <p id="footer_id"></p>
  </center>
</div>
</body>
</html>
