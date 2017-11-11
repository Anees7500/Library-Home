




<!DOCTYPE Html>
<html lang="en">
<head>
  <title>Library | Search</title>
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
      <!--<div id="home" style="float:right;">
        <a href="#"><img src="image/home.jpg" style="border:solid 1px black;margin-top:1%;" class="img-responsive" width="3%" height="3%" /></a>
        <a href="#"><img src="image/logout.png" style="border:solid 1px black;margin-top:1%;" class="img-responsive" width="3%" height="3%" /></a>
      </div>-->
      <center>
           <a href="#"><img src="image/logo.png" style="border-radius:60%;margin-top:3.0%;" class="img-responsive" width="12%" height="12%" /></a>
           <p id="para">Departmental Library</p>
           <p id="para_id">Department of Computer Application (CA)</p>
      </center>
    </div>
    <div class="container"  id="bg_1">
      <nav class="navbar navbar-inverse" id="bg_2" style="width:88.7%;margin-left:5.7%;margin-top:0.4%;">
      <div class="navbar-collapse" id="mainNavBar">
        <ul class="nav navbar-nav navbar-left" style="margin-left:4%;">
          <li><a id="left" href="search_accession.php?q=">Search by Accession number</a></li>
          <li><a id="left" href="search_isbn.php?q=">Search by ISBN number</a></li>
          <li class="active"><a id="left" href="search_name.php?q=">Search by Name</a></li>
        </ul>
      </div>
</nav>
        <div class="modal-content" style="width:88.5%;margin-top:-1.7%;margin-left:5.8%;" id="bg_form">
          <div class="modal-body">
            <form name="reg" class="form-horizontal" style="margin-left:12%;" action="name_results.php?q=" method="post" >
              <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Book Name :</label>
                <div class="col-sm-10">
                 <input type="search" name="user_query" class="form-control" id="pwd" placeholder="Enter book name" style="width:70%;" />
                </div>
              </div>
             <div class="form-group" >
                <div class="col-sm-offset-2 col-sm-10" style="margin-top:-5.6%;margin-right:-20%;padding-left:60%;">
                 <a href="search_name_1.php?q="  target="iframe_a" style="text-decoration:none;"><input type="submit" name="search" class="btn btn-default" value="Search" /></a>
                </div>
                <iframe height="200px" width="107%" name="iframe_a" style="margin-left:-10%;"></iframe>
          </div>
          <hr color="black" />
       </form>
  </div>
</div>
<center>
         <p id="footer_k">Devloped By</p>
         <p id="footer_id">Anees sk</p>
         <p id="footer_id"></p>
  </center>
</div>
</body>
</html>
