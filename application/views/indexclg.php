<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h1>College</h1> 
                    </div>
                    <div class="card-body">
                    <form action="http://localhost/codeigniter3/college/front" method="post">
                     <button class="btn btn-success"> <a href="http://localhost/codeigniter3/college/front" class="text-light"> Add New </a> </button>
                        <table class="table">
                        <thead>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Date of joining</th>
                            <th scope="col">Address</th>
                            <th scope="col">Department</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Gender(male/female)</th>
                            <th scope="col">Blood Group</th>
                            </tr>
                        </thead>

                        <tbody>
                             <?php
                              $connection = mysqli_connect("localhost","root","");
                              $db = mysqli_select_db($connection,"my_db");
                              $sql="select * from staff";
                              $run= mysqli_query($connection,$sql);
                              $id =1;
                              while($row = mysqli_fetch_array($run))
                              {
                                $uid=$row['id'];
                                $name =$row['name'];
                                $Dateofjoining =$row['dateofjoining'];
                                $Address=$row['Address'];
                                $Department=$row['Department'];
                                $phonenumber=$row['Phone_Number'];
                                $gender=$row['Gender'];
                                $BloodGroup=$row['Blood_Group'];
                              

                             ?>
                             <tr>
                                    <td><?php echo $id?></td>
                                    <td><?php echo $name ?></td>
                                    <td><?php echo $Dateofjoining ?></td>
                                    <td><?php echo $Address ?></td>
                                    <td><?php echo $Department ?></td>
                                    <td><?php echo $phonenumber ?></td>
                                    <td><?php echo $gender ?></td>
                                    <td><?php echo $BloodGroup ?></td>
                                    <td> <button class="btn btn-success"> <a href='edit.php?edit=<?php echo $uid ?>' class="text-light"> Edit </a> </button> </td>
                                    <td> <button class="btn btn-danger"><a href='delete.php?del=<?php echo $uid ?>' class="text-light"> Delete </a> </button> </td>
                                    

                            </tr>
                            <?php $id++; } ?>
                            
                        </tbody>
                        </table>
                    </form>
                    </div>
                    </div>


    </div>
    
</body>
</html>