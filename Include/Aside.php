<?php
@session_start();
error_reporting(0);
$page = $_GET['page'];
?>

<aside>

          <div id="sidebar"  class="nav-collapse ">

              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="img/1.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">ADMIN</h5>
                  <?php
include("Config/db.php");
$sth = $conn->prepare("SELECT * from sidebar");
$sth->execute();
while ($data =$sth->fetch(PDO::FETCH_ASSOC) )
{
?>
              	  	
                  <li class="mt">
                  
                      <a href="index.php"><?php echo $data['content'];  ?>
                          <i class="fa fa-dashboard"></i>
                         
</a>

                  </li>
<?php
}
?>
                      
              </ul>
              <!-- sidebar menu end-->
             
          </div>
      </aside>