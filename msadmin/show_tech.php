<?php 
include('inc_dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
  
      <?php include 'inc_head.php'?>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
       <?php include 'inc_header.php'?>

      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <?php include 'inc_sidebar.php'?>

      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Technical</h3>
		  
		  	
		  	<div class="row mt">
              <div class="col-lg-12">
                      <div class="content-panel">
						  <h4><i class="fa fa-angle-right"></i>Entries</h4>
                          <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf">
                                 
                                  <thead class="cf">
                                  <tr>
                                      <th>id</th>
                                      <th>Name</th>
                                      <th class="numeric">Post</th>
									  <th>Address</th>
									  <th>Qualification</th>
									  <th>Additional Qualification</th>
									  <th>Mobile</th>
									  <th>Photo</th>
									  <th>Work Experience</th>
									  <th>Present</th>
									  <th>Resume</th>
									  <th>Salary</th>
									  <th>DOB</th>
									  <th>email</th>
									  <th>Message</th>
                                     
                                  </tr>
                                  </thead>
								  
																			<?php
										$sql = "SELECT * FROM apply where dept=1 order by id desc";
										$result = $conn->query($sql);
										$total_record_page=$result->num_rows;
										if ($result->num_rows > 0) {
											// output data of each row
											while($row = $result->fetch_assoc()) {
									?>
										   
                                  <tbody>
                                  <tr>
                                     
                                                <td data-title="id"><?php echo $row['id']?></td>
                                                <td  data-title="Name"><?php echo $row['name']?></td>
                                                <td data-title="Post"><?php echo $row['post']?></td>
                                                <td data-title="Address"><?php echo $row['address']?></td>
                                        
										        <td data-title="Qualification"><?php echo $row['qualification']?></td>
												<td data-title="Additional Qualification"><?php echo $row['additional']?></td>
												<td data-title="Mobile"><?php echo $row['mobile']?></td>
												<td data-title="Photo"><img src="../<?php echo $row['location']?>"  height="42" width="42"></td>
												<td data-title="Work Experience"><?php echo $row['workexpo']?></td>
												<td data-title="Present"><?php echo $row['present']?></td>
												<td data-title="Resume"><a href="../<?php echo $row['location2']?>" target="_blank" >Click here</a></td>
												
												<td data-title="Salary Expected"><?php echo $row['salary']?></td>
												<td data-title="DOB"><?php echo $row['dob']?></td>
                                                
                                               
                                             
                                                <td data-title="E-mail"><?php echo $row['email']?></td>
                                                <td data-title="Message"><?php echo $row['message']?></td>
									</tr>
                                  </tbody>
								  <?php
										}
									}
									?>
                              </table>
                          </section>
                      </div><!-- /content-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <!--footer start-->
     <?php include 'footer.php'?>
      <!--footer end-->
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery1.js"></script>
    <script src="assets/js/bootstrap.min1.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    

  </body>
</html>
