<?php

    require_once('db.php');
    $query = "select * from friend_list";
    $result = mysqli_query($conn, $query);

?>
    

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details of Registered Student</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav ul {
            list-style: none;
            overflow: hidden;
            background: #333;
            display: flex;
            justify-content: space-around;
        }

        li a {
            color: white;
            padding: 14px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        li a:hover {
            background-color: #111;
        }

        a.active {
            background: red;
        }

        .bg-dark {
            background: black;
            color: white;
        }

        .card {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .display-6 {
            margin-top: 20px;
            background: white;
            color: black;
        }

        .text-center {
            text-align: center;
        }

        table {
            border-radius: 20pxsa;
            background: white;
            color: black;
            border: 1px solid black;
            border-collapse: collapse;
        }

        table th {
            margin: 15px;
            padding: 10px 55px;
            border: 1px solid white;
        }

        table td {
            margin: 15px;
            padding: 10px 55px;
            border: 1px solid black;
        }
        table tr .heading{
            margin: 10px;
        }
    </style>
</head>

<body class="bg-dark">
    <header>
        <nav>
            <ul>
                <li><a href="admin.php" class="active">Register</a></li>
                <li><a href="friend_list.php">Friend List</a></li>
                <li><a href="   ">Friend List</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <table>
                        <h2 class="display-6 text-center">Details of Friendship Status</h2>
                        <tr class="bg-dark heading" >
                            <th>USER 1</th>
                            <th>USER 2</th>
                            <th>Friend Status</th>
                            <!-- <th>Edit</th>
                            <th>Delete</th> -->
                        </tr>
                        <tr>
                            <?php
                                
                                while($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <td><?php echo $row['user1'] ?></td>
                                    <td><?php echo $row['user2'] ?></td>
                                    <td><?php echo $row['status'] ?></td>
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