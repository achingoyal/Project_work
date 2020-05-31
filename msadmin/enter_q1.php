<?php  
 $connect = mysqli_connect("localhost", "username", "password", "testing","3308");  
 if(isset($_POST["insert"]))  
 {    

      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(name) VALUES ('$file')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
          <?php include 'inc_head.php'?>
      </head>  
      <body>  
	  
	    <!--header start-->
       <?php include 'inc_header.php'?>

      <!--header end-->
	  <!--sidebar start-->
      <?php include 'inc_sidebar.php'?>

      <!--sidebar end-->
           <br />
		   <br />  
		   
		   <br />
           <div class="container" style="width:500px" ; > 
		   
		   
                <h3  align="center"> <br /> <br />Upload images</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">  
				 
				 <label style="font-size:20px"><strong>Image</strong></label >
                     <input type="file" name="image" id="image" class="form-control" />  
                     <br />  
                     <input colspan="2"type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
				
				
   
                
           </div>  
      </body>  
	  
	    <!--sidebar start-->
      <?php include 'footer1.php'?>

      <!--sidebar end-->
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  