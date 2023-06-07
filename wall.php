<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('Location:index.html');
}
else
{
 $email = $_SESSION["email"];

 $conn=new mysqli('localhost','root');
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else 
 {
	 $db1=mysqli_select_db($conn,'gift');
	if(!$db1)
			{echo "error in connection with database";} 
 }
}
?>
<!DOCTYPE html>
<style>
.show-on-hover:hover > ul.dropdown-menu {
    display: block;    
}
.dropbtn {
   
    color: white;
    padding: 16px;
    font-size: 16px;
	
    border: none;
    cursor: pointer;
}


 

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 300px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
   
    text-decoration: none;
    display: block;
}
.main-container{
  padding: 14px;
  width: 100%;
  display: flex;
  justify-content: space-between;
  background: #f0f2f5;
  height: calc(100vh - 66px);
  overflow: auto;
}
/* aside section  */
.aside-section{
  width:24%;
  position: sticky;
  top: 0;
  /* background: lightslategray; */
}
.options-container{
  width:100%;
  /* background:lightblue; */
}
.ul-option{
  width: 100%;
  list-style: none;
  padding: 0;
  font-family:sans-serif;
}
.ul-option a li{
  /* background: lightcoral; */
  height: 45px;
  display: flex;
  align-items: center;
  margin-top: 3px;
  border-radius: 12px;
  padding-left: 9px;
}
.ul-option a li:hover{
  color:#1c7cf6;
}
.ul-option a li:hover i{
  color:#1c7cf6;
}
.ul-option a li i{
  margin-right:13px;
  color:grey;
}
.ul-option a li:hover{
  background:#EBEDF0;
}
#main-section{
  width:50%;
}
.user-spec{
  width: 100%;
  height: 55px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  padding-left: 5px;
  border: 1px solid #e1e1e1;
  background: #f4f2f2;
}
.user-logo{
  width: 40px;
  height: 40px;
  border-radius: 50%;
  margin-right: 12px;
}

.col-md-4{
  margin: 0;
  padding: 0;
  width: 24%;
}




/* main section  */
/* #main-section .container{
  width:100%
}
#main-section .container .col-md-8{
  width:100%
} */
#main-section{
  background: #f0f2f5;
}
.panel-bodyy{
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  border-radius: 7px;
  margin-bottom: 11px;
  background:white;
}
.col-sm-2 a img{
  width:40px;
  height:40px;
  border-radius:50%;
  margin-right: 10px;
}
.col-sm-2 a{
  border:none;
  display: flex;
  align-items: center;
  margin: 0;
  background:unset;
}
.col-sm-2{
  width: 100% !important;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  height: 69px;
}
.col-sm-10{
  width:100% !important;
}
.panel-default {
    border: none !important;
    background: #f0f2f5 !important;
}
.user-txt{
  border:none !important;
}
.pointer p{
  text-align:justify;
}
.comment-send-btn{
  color:#0762f0;
  border: none;
  background: none;
  position: absolute;
  top: 6px;
  right: 9px;
}
.comment-form{
  display:flex;
  align-items:center;
  margin: 8px 0;
}
.form-group .form-control{
  border-radius: 20px;
  background: #f0f2f5;
  border: none;
  background: #f0f2f5;
  border-radius: 10px;
}
.comment-form .user-img{
  width: 32px;
  height: 32px;
  border-radius: 50%;
  background: lightblue;
  margin-right: 7px;
}
.form-inline:active{
  outline: none;
  border: none;
  box-shadow: none;
}
.comment-send-box{
  border-radius: 20px;
  height: 34px;
  border: none;
  background: #f0f2f5;
  padding: 0 39px 0 15px;
}
.comment-send-box:focus{
  outline:none;
  border:none;
}
.single-comment{
  display: flex;
  align-items: center;
  margin-bottom: 6px;
}
.single-comment a{
  margin-right: 5px;
  width: 32px;
  height: 32px;
  border-radius: 50%;
}
.single-comment a img{
  width: 100%;
  height: 100%;
  border-radius: inherit;
}
.comment-text{
  height: 34px;
  min-width: 200px;
  background-color: #f0f2f5;
  border-radius: 10px;
  display: flex;
  padding: 5px;
  flex-direction: column;
  height: auto;
  justify-content: center;
  color: #050505;
}
.comment-text .user{
  font-weight: 600;
  font-size: 1.2rem;
  letter-spacing: 0.5px;
}
.post-actions a i{
  margin-right:4px;
  color:lightgrey;
}
.post-actions a{
  color:#aaaaaa;
}
.post-actions a:hover{
  color:#aaaaaa;
}
/* .post-actions a :hover i{
  color:#0762f0;
} */
</style>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GIFT Social Network Registration</title>
 
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	  
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>


    <script src="https://kit.fontawesome.com/e85e142282.js" crossorigin="anonymous"></script>
	
	
	

	
	<script>
	
        function ShowUploadDialog()
        {
            var win = window.open("uploadform.php?pageId=reItems","_blank","toolbar=no, scrollbars=no, resizable=no, top=300, left=500, width=300, height=300");
            
        }
		
		
		
		function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
    </script>
  </head>

  <body >

    <?php include_once"header.php"; ?>
    
<div class="main-container">

      <div class="aside-section">
        <div class="options-container">
          <div class="user-spec">
          <?php
              $query1="SELECT `fname`,`lname`,`image` FROM `register` WHERE email ='". $_SESSION["email"]."'";
              $result1=$conn->query($query1); 
              while($row1=mysqli_fetch_assoc($result1))
              {
                $profile=$row1['image'];
                $fname=$row1['fname'];
                $lname=$row1['lname'];
              }
              echo '<div class="user-logo">
                      <img src="'.$profile.'" alt="" style="width: 100%;height:100%;border-radius: 50%;">
                    </div>
                    <div class="user-name">
                      '.$fname.' '.$lname.'
                    </div>
            </div>'
            ?>
            
          <ul class="ul-option">
            <a href="wall.php">
                    <li>
                    <i class="fa-solid fa-house"></i>Home
                  </li>
                </a>


                <a href="profile.php">
                    <li>
                    <i class="fa-solid fa-user"></i>Profile
                  </li>
                </a>


                <a href="friend-request.php">
                    <li>
                    <i class="fa-solid fa-bell"></i>Request
                  </li>
                </a>


                <a href="message.php">
                    <li>
                    <i class="fa-solid fa-message"></i>Message
                  </li>
                </a>


                <a href="members.php">
                    <li>
                    <i class="fa-solid fa-user-group"></i>Friend
                  </li>
                </a>

                
                <a href="members.php">
                    <li>
                    <i class="fa-solid fa-users"></i>Members
                  </li>
                </a>

                <a href="photos.php">
                    <li>
                    <i class="fa-solid fa-image"></i>Posts
                  </li>
                </a>


                <a href="">
                    <li>
                    <i class="fa-solid fa-gear"></i>Setting
                  </li>
                </a>


                <a href="logout.php">
                    <li>
                    <i class="fa-solid fa-right-from-bracket"></i>Logout
                  </li> 
                </a>
          </ul>
 
        </div>


      </div>

      <section id="main-section">
        <!-- <div class="container">
          <div class="row">
            <div class="col-md-8"> -->
              <div class="feed-container">

                <!-- <div class="feed-heading">
                  <h3 class="feed-title"></h3>
                </div> -->
                
                <div class="panel-body" style=" padding: 15px;
                                                background: white;
                                                margin-bottom: 11px;
                                                display: flex;
                                                border-radius: 8px;
                                                flex-direction: column;">
                          <div class="user-post-section"      style="display:flex;
                          align-items: center;
                          width: 100%;
                          margin-bottom:5px">
                              <?php
                                  $query1="SELECT `fname`,`image` FROM `register` WHERE email ='". $_SESSION["email"]."'";
                                  $result1=$conn->query($query1); 
                                  while($row1=mysqli_fetch_assoc($result1))
                                  {
                                    $profile=$row1['image'];
                                    $fname=$row1['fname'];
                                  }
                                  $sign="'";
                                  echo '<div class="feed-user" style="width: 40px;
                                                                height: 40px;
                                                                border-radius: 50%;
                                                                margin-right:5px">
                                          <img src="'.$profile.'" alt="" style="width:100%;height:100%;border-radius:inherit">
                                        </div>
                                        
                                            <div class="feed-input" style="width:94%; ">
                                  <textarea class="form-control" placeholder="What'.$sign.'s on your mind, '.$fname.'?" id="txta"></textarea>
                                </div>
                                        
                                        '?>
                      
                            

                          </div>
                <style>
                  .form-control{
                    background: #f0f2f5;
                    border: none;
                    outline: none;
                    box-shadow: none;
                    border-radius: 7px;
                  }
                  .form-control:focus{
                    border:none;
                    box-shadow:none;
                    outline:none;
                  }
                </style>

                <div class="post-submit-btn" style="display: flex;
                                              align-items: center;
                                              justify-content: flex-end;">

                    <div class="pull-right" style="margin-right:8px">
                      <div class="btn-toolbar">
                      
                        <button class="btn btn-primary btn-large" id="btnUploadFile" name="btnUploadFile" onclick="ShowUploadDialog();" 
                        style="background: none;
                              color: #aaaaaa;
                              border: none;
                              outline: none;
                              padding: 0;">
                        <i class="fa-solid fa-image"></i>
                      </button>
                      <input type="hidden" id="imgSmall" name="imgSmall" class="CssTextBox form-control" maxlength="2500" displayfieldname="Image" placeholder="Image">
                      <div id="msg" style="text-align: center;"> </div>
                      <input type="hidden" id="email" value="<?php echo $email?>">
                    </div>
                  </div>


                  <div class="pull-right" style="margin-right:8px">
                      <div class="btn-toolbar">
                      
                        <button class="btn btn-primary btn-large" id="btnUploadFile" name="btnUploadFile" onclick="ShowUploadDialog();" 
                        style="background: none;
                              color: #aaaaaa;
                              border: none;
                              outline: none;
                              padding: 0;">
                        <i class="fa-solid fa-paperclip"></i>
                      </button>
                      <input type="hidden" id="imgSmall" name="imgSmall" class="CssTextBox form-control" maxlength="2500" displayfieldname="Image" placeholder="Image">
                      <div id="msg" style="text-align: center;"> </div>
                      <input type="hidden" id="email" value="<?php echo $email?>">
                    </div>
                  </div>

                  <button type="submit" class="btn btn-default" id="submit" style="width: 64px;
                                                                                    height: 30px;
                                                                                    display: flex;
                                                                                    align-items: center;
                                                                                    justify-content: center;
                                                                                    color: white;
                                                                                    background: #0762f0;">Post</button>
                </div>

                      
                 </div>
            </div>



        <div class="panel panel-default post">
        <?php
        $query1="SELECT `image` FROM `register` WHERE email ='". $_SESSION["email"]."'";
        $result1=$conn->query($query1); 
        while($row1=mysqli_fetch_assoc($result1))
        {
          $user=$row1['image'];
        }
          $query="SELECT * FROM `post` WHERE status ='TRUE' ORDER BY `id` DESC ";
          $result=$conn->query($query);   
          while($row=mysqli_fetch_assoc($result))
              {
          $query1="SELECT `fname`,`lname`,`image` FROM `register` WHERE email ='". $row['email']."'";
          $result1=$conn->query($query1); 
          while($row1=mysqli_fetch_assoc($result1))
          {
            $profile=$row1['image'];
            $fname=$row1['fname'];
            $lname=$row1['lname'];
          }
          $id=$row['id'];
          $temp;

  
$isConditionTrue = $row['image']; // Replace this with your actual condition

echo '<div class="panel-bodyy">
    <div class="col-sm-2">
        <a href="#" class="post-avatar thumbnail"><img src="'.$profile.'" alt="">
        <div class="text-center">'.$fname." ".$lname.'</div></a>
    </div>

    <div class="col-sm-10">
        <div class="user-txt" style="margin-bottom: 7px; width: 100%">
            <div class="pointer">
                <p>'.$row['text'].'</p>
            </div>
        </div>';

if ($isConditionTrue) {
    echo '<div class="cms" style="border-radius: 12px; margin-bottom:8px;">
            <img src="'.$row['image'].'" class="img-responsive" style="width: 100%; height: 30%; border-radius:inherit;">
          </div>';
}

echo '<hr style="margin:0">
<p class="post-actions" style="display: flex;align-items: center;justify-content: space-around;">
  <a href="like.php?id='.$row['id'].'"><i class="fa-solid fa-thumbs-up"></i>like</a>
  <a href=""><i class="fa-solid fa-comment"></i>comment</a>
  <a href=""><i class="fa-solid fa-share-nodes"></i>share</a>
</p>


<hr style="margin:0">
    <div class="comment-form">
    <div class="user-img">  
    <img src="'.$user.'" alt="" style="width: 100%;
    height: 100%;
    border-radius: inherit;">
  </div>
        <form action="comment.php" method="post" class="form-inline" style="position:relative;width:100%;">
            <input type="hidden" name="id" value="'.$row['id'].'">
            <input type="hidden" name="image" value="'.$email.'">
            <div class="form-group" style="width:100%">
                <input type="text" name="comment" class="comment-send-box" placeholder="Enter a comment here..." style="border-radius:20px" required>
            </div>
            <button type="submit" class="comment-send-btn">
            <i class="fa-solid fa-paper-plane"></i></button>
        </form>
    </div>
    <div class="clearfix"></div>
<div class="comments">';




            $query2="SELECT * FROM `comment` as c,`register` as r WHERE c.id= $id and c.email = r.email ORDER BY `count` DESC ";
            $result2=$conn->query($query2);   
          while($row2=mysqli_fetch_assoc($result2))
              { 
            
                      
                        echo'<div class="single-comment">
                          <a href="seeprofile.php?mail='.$row2['email'].'" class="comment-avatar pull-left"><img src="'.$row2['image'].'" alt=""></a>
                          <div class="comment-text">
                          <div class="user">'.$row2['fname']." ".$row2['lname'].'</div>
                          <div class="">'.$row2['comment'].'</div>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                  ';
                      
        }
        echo' </div>
                    </div>
                  
                </div>';
        }
        ?>
                
              </div>
        <!-- </div>
            
          
            
        </div>
        </div> -->
        
        

      </section>

      <div class="col-md-4" style="width: 24%;padding: 0;position: sticky;top: 0;overflow: auto;">
      <?php include_once"my-friend.php"; ?>
      <?php include_once"allmember.php"; ?>
      </div>
  </div>
   
   


    <!-- <footer>
      <div class="footer">
        <p>GIFT Social Media  &copy 2023 Satyajit Debasis Priyaranjan</p>
      </div>
    </footer> -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
  <script type="text/javascript">

  $(document).ready(function(){
      $("#submit").click(function(){
	  var txt=$("#txta").val();
      var img=$("#imgSmall").val();
	  var email=$("#email").val();
	   var dataString="img="+img+"&txt="+txt+"&email="+email;
	   if(txt=="")
          alert("Please Fill All the Fields");
else{	  
		$.ajax({
                          type:"POST",
                           url:"postupload.php",
                           data:dataString,
                            cache:false,
                             success:function(result){
                                $("#msg").html(result).css("color","green");
                                 $("#txta").val(" ");
                                      
                                 },
                                  error:function(xhr,status)
                                   {
                                    alert("error");
                                     }
                                 });
}
      });
      
  });
  
  </script>
  <script>
(function() {

	$('#live-chat header').on('click', function() {

		$('.chat').slideToggle(300, 'swing');
		$('.chat-message-counter').fadeToggle(300, 'swing');

	});

	$('.chat-close').on('click', function(e) {

		e.preventDefault();
		$('#live-chat').fadeOut(300);

	});

}) ();
</script>
</html>
