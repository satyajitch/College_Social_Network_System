<?php

    require_once('db.php');
    $query = "select * from register";
    $result = mysqli_query($conn, $query);

?>
    

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details of Registered Student</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body class="bg-dark">
    <header>
        <nav>
            <ul>
                <li><a href="#home" class="active">Register</a></li>
                <li><a href="friend_list.php">Friend List</a></li>
                <li><a href="friends.php">Friends</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <table>
                        <h2 class="display-6 text-center">Details of Registered Students</h2>
                        <tr class="bg-dark heading" >
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>DOB</th>
                            <th>Gender</th>
                            <!-- <th>Edit</th>
                            <th>Delete</th> -->
                        </tr>
                        <tr>
                            <?php
                                
                                while($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <td><?php echo $row['fname'] ?></td>
                                    <td><?php echo $row['lname'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['mobile'] ?></td>
                                    <td><?php echo $row['dob'] ?></td>
                                    <td><?php echo $row['gender'] ?></td>

                                </tr>
                                <?php
                                }

                            ?>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>

    </div>
</body>

</html>