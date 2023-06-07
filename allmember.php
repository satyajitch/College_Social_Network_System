 <style>
	a{
		color:#050505
	}
	a:hover{
		text-decoration:none;
		color:#050505;
	}
	.all-members ul a li{
		width: 100%;
		margin-bottom: 5px;
		padding: 5px;
		border-radius: 6px;
		list-style: none;
	}
	.all-members ul{
		padding: 0;
	}
	.all-members ul a li:hover{
		background:#e4e6eb;
	}
 </style>
 <div class="panel panel-default all-members">
 <div class="friend-list-heading" style="display: flex;
														align-items: center;
														justify-content: space-between;
														padding: 5px 15px;
														}">
			<a href="members.php"> <div class="heading" style="font-size: 1.6rem;
											color: #65676b;
											letter-spacing: 0.51px;">All Members</div></a>
				<div class="options" style="color: #65676b;"><i class="fa-solid fa-ellipsis"></i></div>
			  </div>
              <div class="panel-body" style="padding:0 15px">
                <ul>
				<?php
				
                
				  
									 
				       	$query1="SELECT  * FROM `register`";	
                                        $res1=$conn->query($query1);
										if($res1->num_rows > 0)
										{
					                 while($row1=mysqli_fetch_assoc($res1))
									  {
											$email=$row1["email"];
										$fname=$row1["fname"];
										  $lname=$row1["lname"];
										  $name=$fname.' '.$lname;
										  $image=$row1['image'];
									  			
					 echo'<a href="seeprofile.php?mail='.$email.'" class=""><li><img src='.$image.' alt="pimage" style="margin-right: 7px;
					 width: 35px;
					 height: 35px;
					 border-radius: 50%"> '.$name.'</li></a>';
					
									  }
				  
										}
				 ?>
                </ul>
                <div class="clearfix"></div>
                <!-- <a class="btn btn-primary" href="members1.php">View All Friends</a> -->
              </div>
            </div>