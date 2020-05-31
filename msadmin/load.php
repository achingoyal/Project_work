<!DOCTYPE html>
<html>
<head>
<title> </title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class ="container">
  <br>
  <h1 class="text-white bg-dark text-center">
   Upload  images
   </h1>
   <div class="col-lg-8 m-auto d-block">
   <form action="gallery.php" method="post" enctype="multipart/form-data" >
   <div class ="form-group">
   <label for="user"> username</label>
   <input type="text" name ="username" id="user" class="form-control">
   
   
   </div>
   <div class ="form-group">
   <label for="file">Image</label>
   <input type="file" name ="file" id="file" class="form-control">
   </div>
   
   <input type="submit" name="submit" value="submit" class="btn btn-success">
   </form>
   </div>
  </div>

</body>
</html                             >