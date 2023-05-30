<?php

    require_once('admin/db.php');
    $query = "select * from register where email='$email';";
    $result = mysqli_query($conn, $query);

?>
  
  <header style="height: 66px;width: 100%;background:white;box-shadow: 0 -36px 74px 26px lightgrey;position: sticky;
    top: 0;
    z-index: 99;">
 
    <div class="container" style="    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    padding: 0 116px" >
	    
	      <div class="" style="display : flex;align-items:center; ">
          <img src="img/gift-logo.png" alt="GIFT Logo" style= "height: 50px; width: 50px;">
	        <a href="wall.php"> <h6 style="color:white;  font-family:monospace; font-size: 31px;color:black"><b>GIFT Social Network</b></h6> </a>
	      </div>
  
        <div class="navbar-user-profile" style="margin-left: 716px">
	        <!-- <a href="profile.php">
          </a> -->
          <?php


        $query1="SELECT `image` FROM `register` WHERE email ='". $email."'";
        $result1=$conn->query($query1); 
        while($row1=mysqli_fetch_assoc($result1))
        {
          $user=$row1['image'];
        }
         echo' <div class="user-icon" style="width:50px;height:50px;border-radius:50%;"><img src="'. $user.'" alt="" style="    height: 100%;
         width: 100%;
         border-radius: inherit;"></div>'
          
        ?>
	
    </div>
	</div>
  </header>
 <!-- <nav class="navbar navbar-default">
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
        </div>
      </div>
    </nav> -->