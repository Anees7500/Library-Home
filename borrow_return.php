




<!DOCTYPE Html>
<html lang="en">
<head>
  <title>Library | Borrow</title>
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
      <nav class="navbar navbar-inverse" id="bg_2" style="width:88.7%;margin-left:5.7%;margin-top:0.4%;">
      <div class="navbar-collapse" id="mainNavBar">
        <ul class="nav navbar-nav navbar-left" style="margin-left:4%;">
          <li><a id="left" href="borrow_book.php?q=">Borrow Book</a></li>
          <li><a id="left" href="borrow_list.php?q=">Borrower's list</a></li>
          <li class="active"><a id="left" href="borrow_return.php?q=">Return Book</a></li>
        </ul>
      </div>
</nav>
      <center><div class="modal-content" style="width:28%;margin-left:-60%;" id="bg_form">
      <div class="modal-body">
        <form role="form" method="post" action="return_results.php?q=" >
          <div class="form-group">
              <span class='label label-info' id="n">  Registation No </span>
              <input type="search" name="user_query" class="form-control" placeholder="Enter Registation no..." style="width:90%;"  />
            </div>
      </div>
      <div class="modal-footer">
        <input type="submit" name="search" id="bt" class="btn btn-primary btn-block" value="Search"  style="width:172%; margin-left:-36%;"/>
      </div>
    </form>
      <div class="modal-body">
        <form role="form" method="post" action="" enctype="multiplepart/form">
          <div class="form-group">
              <span class='label label-info' id="n">  Accession No </span>
              <input type="password" name="consumer" class="form-control" placeholder="Enter Accession no..." style="width:90%;"  />
            </div>
      </div>
      <div class="modal-footer">
        <input type="submit" name="submit_feedback" id="bt" class="btn btn-primary btn-block" value="Return"  style="width:172%; margin-left:-36%;"/>
      </div>
      </form>
    </div></center>
    <center><div class="modal-content" style="width:58%;margin-left:30%;margin-top:-31.5%;" id="bg_form">
    <div class="modal-body">
      <iframe height="310px" width="100%" name="iframe_a" style="margin-left:0%;"></iframe>
  </div></center>
  </div>
  <center>
         <p id="footer_i">Devloped By</p>
         <p id="footer_id">Anees sk</p>
         <p id="footer_id"></p>
  </center>
</div>
</body>
</html>
