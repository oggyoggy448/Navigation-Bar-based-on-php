<?php
ob_start();
session_start();
?>
     
<!DOCTYPE html>
<html lang="en">
  <?php include('Include/Head.php');?>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <?php include('Include/Header.php')?>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <?php include('Include/Aside.php')?>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Gallery</h3>
             <hr>
             
                <div class="row mt" >
                 <?php
include("Config/db.php");
$sth = $conn->prepare("SELECT * from event_gallery order by g_id desc");
$sth->execute();
while ($data =$sth->fetch(PDO::FETCH_ASSOC) )
{
	 ?>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc" style="margin-bottom:20px !important;">
						<div class="project-wrapper">
		                    <div class="project">
		                        <div class="photo-wrapper">
		                            <div class="photo">
                                    
		                            	<a class="fancybox" href="uploads/<?php echo $data['g_img'];  ?>"><img class="img-responsive" src="uploads/<?php echo $data['g_img'];  ?>" alt="" style="width:400px !important; height:250px !important;"></a>
		                            </div>
		                            <div class="overlay"></div>
		                        </div>
		                    </div>
		                </div>
					</div><!-- col-lg-4 -->
                     <?php
}
?>
				</div><!-- /row -->
                
            
		                            	

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
	<script src="assets/js/fancybox/jquery.fancybox.js"></script>    
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
  
  <script type="text/javascript">
      $(function() {
        //    fancybox
          jQuery(".fancybox").fancybox();
      });

  </script>
  
  <script>
      //custom select box

      $(function(){
          $("select.styled").customSelect();
      });

  </script>

  </body>
</html>
