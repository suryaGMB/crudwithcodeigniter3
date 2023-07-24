<?php
   $connection = mysqli_connect("localhost","root","");
   $db = mysqli_select_db($connection,"my_db");
    
    if(isset($_POST['submit']))
    {
    
         $name= $_POST['name'];
         $Dateofjoining= $_POST['Dateofjoining'];
         $Address= $_POST['Address'];
         $Department= $_POST['Department'];
         $phonenumber= $_POST['phonenumber'];
         $gender= $_POST['gender'];
         $BloodGroup= $_POST['BloodGroup'];

         $sql="insert into staff(name,dateofjoining,Address,Department,Phone_Number,Gender,Blood_Group)values('$name','$Dateofjoining','$Address',' $Department',' $phonenumber','$gender','$BloodGroup')";
         if(mysqli_query($connection,$sql))
         {
            echo'<script>location.replace("indexclg.php")</script>';

            

         }
         else
         {
         echo " error" .$connection->error;
         }

    }


?>

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
                    <form action="http://localhost/codeigniter3/college/savedata/" method="post">
                        <div class="form-group" >
                            <label>Name :</label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter Name">   
                        </div>
                        </br>
                        <div class="form-group">
                            <label>Date of joining :</label>
                            <input type="Date" name="Dateofjoining" class="form-control"  placeholder="Enter Date of joining">   
                        </div>
                        </br>
                        <div class="form-group">
                            <label>Address :</label>
                            <input type="text" name="Address" class="form-control"  placeholder="Enter the address">   
                        </div>
                        </br>
                        <div class="form-group">
                           <label>Department :</label>
                            <select Department="Department" name=Department>
                             <option value="AGRI">AGRI</option>
                             <option value="BIO MEDICAL">BIO MEDICAL</option>
                             <option value="CSE">CSE</option>
                             <option value="ECE">ECE</option>
                             <option value="EEE">EEE</option>
                            </select>

                        </div>
                        </br>
                        <div class="form-group">
                            <label>Phone Number :</label>
                            <input type="tel" name="phonenumber" class="form-control"  placeholder="Enter the phone number">   
                        </div>
                        </br>
                        <div class="form-group">
                            <label>Gender :</label>
                            <input type="radio" name="gender" value="Male">MALE
                            <input type="radio" name="gender" value="Female">FEMALE
                            
                        </div>
                        </br>
                        <div class="form-group">
                           <label>Blood Group :</label>
                            <select Blood Group="BloodGroup" name="BloodGroup">
                             <option value="A+">A+</option>
                             <option value="A-">A-</option>
                             <option value="AB+">AB+</option>
                             <option value="AB-">AB-</option>
                             <option value="B+">B+</option>
                             <option value="B-">B-</option>
                             <option value="O+">O+</option>
                             <option value="O-">O-</option>

                            </select>
                        </br>
                        </br>

                        
                        <input type="submit" class="btn btn-primary" name="submit" value="Register">
                        </form>
                   
                            
                        
                    </div>
                    </div>


    </div>
    
</body>
</html>