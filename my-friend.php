 <style>
	a{
		color:#050505
	}
	a:hover{
		text-decoration:none;
		color:#050505;
	}
	.my-friend-list ul a li{
		width: 100%;
		margin-bottom: 5px;
		padding: 5px;
		border-radius: 6px;
		list-style: none;
	}
	.my-friend-list ul{
		padding: 0;
	}
	.my-friend-list ul a li:hover{
		background:#EBEDF0;
	}
 </style>
 <div class="panel panel-default my-friend-list">
              <div class="panel-heading">
                <h3 class="panel-title">My Friends</h3>
              </div>
              <div class="panel-body">
                <ul>
				<?php
				 $query="SELECT  `user2`  FROM `friend_list` WHERE user1='".$email."' AND status='YES' ";
                 $res=$conn->query($query);
				  while($row=mysqli_fetch_assoc($res))
	              {
					 $sender=$row["user2"];					 
					$query1="SELECT  * FROM `register` WHERE  email = '".$sender."'";	
                                        $res1=$conn->query($query1);
					                 while($row1=mysqli_fetch_assoc($res1))
									  {
										  $fname=$row1["fname"];
										  $lname=$row1["lname"];
										  $name=$fname.' '.$lname;
										  $image=$row1['image'];
									  }				
					 echo'<a href="seeprofile.php?mail='.$sender.'" class="" style=""><li class=""><img src='.$image.' alt="" style="margin-right: 7px;
					 width: 40px;
					 height: 40px;
					 border-radius: 50%">'.$name.'</li></a>';
					 
				  }
				
				 ?>
                </ul>
                <div class="clearfix"></div>
                <!-- <a class="btn btn-primary" href="members1.php">View All</a> -->
              </div>
            </div>