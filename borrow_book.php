






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
<body onload="document.reg.user_query.focus();">
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
          <li class="active"><a id="left" href="borrow_book.php?q=">Borrow Book</a></li>
          <li><a id="left" href="borrow_list.php?q=">Borrower's list</a></li>
          <li><a id="left" href="borrow_return.php?q=">Return Book</a></li>
        </ul>
      </div>
</nav>
      <center><div class="modal-content" style="width:28%;margin-left:-60%;" id="bg_form">
      <div class="modal-body">
        <form name="reg" role="form" method="post" action="results_borrow.php?q=" enctype="multiplepart/form">
          <div class="form-group">
              <span class='label label-info' id="n">  Registation No </span>
              <input type="search" name="user_query" class="form-control" placeholder="Enter Registation no..." style="width:90%;"  />
            </div>
      </div>
      <div class="modal-footer">
        <input type="submit" name="search" id="bt" class="btn btn-primary btn-block" value="Search"  style="width:172%; margin-left:-36%;"/>
      </div>
      </form>
    </div></center>
    <center>
      <div class="modal-content" style="width:28%;margin-left:-2%;margin-top:-16.5%;" id="bg_form" style="float:right;">
    <div class="modal-body">
      <form role="form" method="post" action="" enctype="multiplepart/form">
        <div class="form-group">
            <span class='label label-info' id="n">  Username </span>
            <input type="password" name="consumer" class="form-control" value="" style="width:90%;" disabled="" />
          </div>
          <div class="form-group">
            <span class='label label-info' id="n"> Session </span>
            <input type="text" name="consumer" class="form-control" value="" style="width:90%;" disabled="" />
          </div>
          <div class="form-group">
            <span class='label label-info' id="n">  Contact No </span>
            <input type="text" name="consumer" class="form-control" value="" style="width:90%;" disabled="" />
          </div>
    </div>
    </form>
  </div>
</center>
<center>
  <div class="modal-content" style="width:30%;margin-left:58%;margin-top:-22%;" id="bg_form" style="float:right;">
<div class="modal-body">
  <form role="form" method="post" action="" enctype="multiplepart/form">
    <div class="form-group">
        <span class='label label-info' id="n">  Assession No </span>
        <input type="text" name="borrow_accession_no" class="form-control" placeholder="Assession Number...." style="width:90%;"  />
      </div>
      <div class="modal-footer">
        <input type="submit" name="borrow" id="bt" class="btn btn-primary btn-block" value="Borrow"  style="width:172%; margin-left:-36%;"/>
      </div>
</div>
</form>
</div>
</center>
  </div>
  <center>
         <p id="footer_x">Devloped By</p>
         <p id="footer_id">Anees sk</p>
         <p id="footer_id"></p>
  </center>
</div>
</body>
</html>
