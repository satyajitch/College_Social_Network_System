<?php

    require_once('db.php');
    $query = "select * from friends";
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
                <li><a href="admin.php">Register</a></li>
                <li><a href="friend_list.php">Friend List</a></li>
                <li><a href="friends.php" class="active">Friends</a></li>

            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <table>
                        <h2 class="display-6 text-center">Details of Friendship Requests</h2>
                        <tr class="bg-dark heading" >
                            <th>Sender</th>
                            <th>Receiver</th>
                            <th>Status</th>
                            <th>friends</th>
                            <!-- <th>Edit</th>
                            <th>Delete</th> -->
                        </tr>
                        <tr>
                            <?php
                                
                                while($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <td><?php echo $row['sender'] ?></td>
                                    <td><?php echo $row['receiver'] ?></td>
                                    <td><?php echo $row['r_status'] ?></td>
                                    <td><?php echo $row['friends'] ?></td>
                                    
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