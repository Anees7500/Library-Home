

<!DOCTYPE Html>
<html lang="en">
<head>
  <title>Library | Book</title>
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
          <li><a id="left" href="book_add.php?q= ">Add new book</a></li>
          <li class="active"><a id="left" href="book_list.php?q= ">List of books</a></li>
          <li><a id="left" href="book_edit.php?q= ">Edit book information</a></li>
        </ul>
      </div>
</nav>
        <center>
          <div class="modal-content" style="width:88.5%;margin-top:-1.7%;margin-left:%;" id="bg_form">
          <div class="modal-body">
            <div class="modal-footer">
              <div class="col-sm-offset-2 col-sm-10" style="margin-left:-20%;">
               <button type="submit" class="btn btn-default"><a href="book_list_1.php"  target="iframe_a" style="text-decoration:none;">List of books</a></button>
              </div></div>
              <table class="table q" border="1" style="background-color:black;" style="margin-top:-14%;padding-bottom:20%;">
             <thead>
               <tr>
                 <td id="k"style="color:white;">Accession</td>
                 <td id="k" style="color:white;">ISBN No</td>
                 <td id="k" style="color:white;">Book Title</td>
                 <td id="k" style="color:white;">Auther Name</td>
                 <td id="k" style="color:white;">View Book</td>
                 <td id="k" style="color:white;">Edition</td>
                 <td id="k" style="color:white;">Bookself</td>
                 <td id="k" style="color:white;">Row</td>
                 <td id="k" style="color:white;">Column</td>
               </tr>
             </thead>
           </table>
            <iframe height="200px" width="100%" style="margin-top:-2%;"  name="iframe_a"></iframe>

          </div>
    </div>
  </center>
  </div>
  <center>
         <p id="footer_k">Devloped By</p>
         <p id="footer_id">Anees sk</p>
         <p id="footer_id"></p>
  </center>
</div>
</body>
</html>
