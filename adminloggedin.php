<?php
session_start(); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gift";



   $conn = new mysqli( $servername, $username, $password, $dbname);
   

           if($conn -> connect_error)
           	   die("connection failed" . $conn-> connect_error);
           	else
           	{
           			
           			$id=$_POST['id'];
           			
           			$pass=$_POST['password'];
           			
           		 $query1 ="SELECT * FROM admin WHERE id='$id' AND password='$pass' ";
				  $result = $conn->query($query1);

                  
				


                    if($result->num_rows > 0) 
                                 {
									$_SESSION["id"]=$id;
									
									echo"<script>";
									echo"location.href='admin/admin.php'";
									echo"</script>";
								 }
							 else
							 {

					                echo"<script>";
									echo"location.href='wrongindex.html'";
									echo"</script>";
						/*	echo '<script language="javascript">';
							echo 'alert("invalid login id or password!")';
							echo '</script>';

							header( "refresh:0;url=index.html" );
                         */
											   }
			}
			
			
		
		
?>