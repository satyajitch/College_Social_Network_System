<?php

    require_once('admin/db.php');
    $query = "select * from register where email='$email';";
    $result = mysqli_query($conn, $query);

?>

  <html>
    <head>
    <script src="https://kit.fontawesome.com/e85e142282.js" crossorigin="anonymous"></script>
    <style>
      .nav-ul-items ul{
        display: flex;
        align-items: center;
        list-style-type:none;
      }
      .nav-ul-items ul li {
        padding: 0 30px;
      }
      
      </style>
</head>
<body>
  
  <header style="height: 66px;width: 100%;background:white;box-shadow: 0 -36px 74px 26px lightgrey;position: sticky;
    top: 0;
    z-index: 99;">
 
    <div class="container" style="width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;" >
	    
	      <div class="" style="display : flex;align-items:center; ">
          <a href="wall.php"><img src="img/gift-logo.png" alt="GIFT Logo" style= "height: 50px; width: 50px;"></a>
	        <a href="wall.php"> <h6 style="color:white;  font-family:monospace; font-size: 31px;color:black"><b>GIFT Social Network</b></h6> </a>
	      </div>
          
        <div class="nav-ul-items">
          <ul>
            <a href="wall.php"><li><i class="fa-solid fa-house"></i></li></a>
            <a href="profile.php"><li><i class="fa-solid fa-user"></i></li></a>
            <a href="friend-request.php"><li><i class="fa-solid fa-bell"></i></li></a>
            <a href="message.php"><li><i class="fa-solid fa-message"></i></li></a>
            <a href="members.php"><li><i class="fa-solid fa-user-group"></i></li></a>
            <a href="photos.php"><li><i class="fa-solid fa-image"></i></li></a>
          </ul>
        </div>

        <div class="navbar-user-profile">
	        <!-- <a href="profile.php">
          </a> -->
          <?php


        $query1="SELECT `image` FROM `register` WHERE email ='". $email."'";
        $result1=$conn->query($query1); 
        while($row1=mysqli_fetch_assoc($result1))
        {
          $user=$row1['image'];
        }
         echo'<a href="profile.php"> <div class="user-icon" style="width:50px;height:50px;border-radius:50%;"><img src="'. $user.'" alt="" style="    height: 100%;
         width: 100%;
         border-radius: inherit;"></div></a>'
          
        ?>
        </div>
	</div>
  </header>
      </body>
      </html>
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