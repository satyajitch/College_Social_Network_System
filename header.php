<?php

    require_once('admin/db.php');
    $query = "select * from register where email='$email';";
    $result = mysqli_query($conn, $query);

?>
  
  <header >
 
    <div class="container"  >
	    <div class="row" style = "display: flex;">
	      <div class="col-md-4">
          <!-- <img src="img/gift-logo.png" alt="GIFT Logo" style= "display : inline-block; height: 80px; width: 80px"> -->
	        <a href="wall.php"> <h6 style="color:white;  font-family:monospace; font-size: 31px"><b>GIFT Social Network</b></h6> </a>
	      </div>
        <div class="col-md-4">
	      </div>
        <div class="col-md-4">
	        <a href="profile.php"> <h6 style="color: pink; text-align: center; font-family:monospace; font-size: 31px">
            Hi <?php
              $row = mysqli_fetch_assoc($result);
               echo $row['fname'];
            ?>!
</h6> </a>
	      </div>
 <!-- <div class="col-md-8">
    
	  </div> -->
      </div>
	</div>
  </header>
 <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="wall.php">Home</a></li>
			      <li><a href="profile.php">Profile</a></li>
			      <li><a href="members.php">Members</a></li>
			 	    <li><a href="friend-request.php">Friend Request</a></li>
				 		<li><a href="message.php">Message</a></li>
            <li><a href="photos.php">Photos</a></li>
	          <li><a href="logout.php">Logout</a></li>   </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>