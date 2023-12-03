<?php

    include ('./connect.php');
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];  
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $image=$_FILES['file'];

        $imagefilename = $image['name'];
     
        $imagefileerror = $image['error'];
       
        $imagefiletemp = $image['tmp_name'];
       
        $filename_separate=explode('.',$imagefilename);
       


        $file_extension=strtolower(end($filename_separate));
     

        $extension=array('jpeg','jpg','png');
        if(in_array($file_extension, $extension)){
            $upload_image='images/'.$imagefilename;
            move_uploaded_file($imagefiletemp, $upload_image);
            $sql="insert into `signup`(name, email, mobile, password, cpassword, image) values('$name', '$email', '$mobile', '$password', '$cpassword', '$upload_image')";
            $result=mysqli_query($con,$sql);
            if($result){
                echo "Data inserted successfully"; // success alert
            }else{
                die(mysqli_error($con));
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/displayStyles.css">
    <title>Display Data</title>
</head>
<body>

    <?php

    include 'templates/header.php'; 

    ?>

    <div class="cont">
        <table class="table" id="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Image</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $sql ="Select * from `signup`";
                    $result = mysqli_query($con, $sql);

                    if($result){
                        while ($row = mysqli_fetch_assoc($result)) {

                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $mobile= $row['mobile']; 
                            $image = $row['image'];
                           

                            echo '<tr>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$mobile.'</td>
                            <td><img src="'.$image.'"></td>
                           
                            <td>
                            <button class="update"><a href="update.php? updateid='.$id.'">Update</a></button>
                            <button class="delete"><a href="delete.php? deleteid='.$id.'">Delete</a></button>
                            </td>
                            </tr>';
                            
                    }
                }

                ?>
                
            </tbody>
        </table>

    </div>
    <?php

    include 'templates/footer.php'; 

    ?>
</body>
</html>